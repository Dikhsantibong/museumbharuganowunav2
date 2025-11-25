<?php

namespace App\Http\Controllers;

use App\Models\QuizAttempt;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Halaman utama + leaderboard
    public function start()
    {
        $leaderboard = QuizAttempt::orderByDesc('score')->take(10)->get();
        return view('quiz.start', compact('leaderboard'));
    }

    // Mulai quiz
    public function begin(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100'
        ]);

        $attempt = QuizAttempt::create([
            'nama' => $request->nama,
            'score' => 0
        ]);

        session([
            'question_index' => 0,
            'score' => 0
        ]);

        return redirect()->route('quiz.play', $attempt->id);
    }

    // Halaman soal
    public function play($attemptId)
    {
        if (!session()->has('questions')) {
            $questions = QuizQuestion::inRandomOrder()->take(10)->get();
            session()->put('questions', $questions);
        } else {
            $questions = session('questions');
        }

        $index = session('question_index');

        if (!isset($questions[$index])) {
            return redirect()->route('quiz.result', $attemptId);
        }

        $question = $questions[$index];

        return view('quiz.play', compact('question', 'attemptId'));
    }

    // Proses jawaban
    public function answer(Request $request)
    {
        $questions = session('questions');
        $index = session('question_index');
        $question = $questions[$index];

        $timeTaken = $request->time;
        $baseScore = 100;
        $bonus = max(0, 50 - $timeTaken);

        if ($request->answer == $question->correct_answer) {
            session()->increment('score', $baseScore + $bonus);
        }

        session()->increment('question_index');

        if (session('question_index') >= 10) {
            return redirect()->route('quiz.result', $request->attempt_id);
        }

        return redirect()->route('quiz.play', $request->attempt_id);
    }

    // Result + simpan + tampil di halaman utama
    public function result($attemptId)
    {
        $attempt = QuizAttempt::findOrFail($attemptId);

        $attempt->update([
            'score' => session('score')
        ]);

        session()->forget(['questions', 'question_index', 'score']);

        return redirect()->route('quiz.start')->with('success', 'Quiz selesai! Skor Anda tersimpan.');
    }
}
