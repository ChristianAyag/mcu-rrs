<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

// data entry
Route::get('/', function () {
    return view('auth.login');
})->name('auth.logout');

Route::get('/send-otp', function () {
    return view('auth.send-otp');
})->name('send.otp');

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('password.reset');

// erb
Route::get('/erb/research-records', function () {
    return view('erb.research-records');
});

Route::get('/erb/pending-accounts', function () {
    return view('erb.pending-accounts');
});

Route::get('/erb/approved-accounts', function () {
    return view('erb.approved-accounts');
});

Route::get('/erb/pending-reviews', function () {
    return view('erb.pending-reviews');
});

Route::get('/erb/assign-reviewer', function () {
    return view('erb.assign-reviewer');
});

Route::get('/erb/reviewers-checklist', function () {
    return view('erb.reviewers-checklist');
});

Route::get('/erb/dashboard', function () {
    return view('erb.dashboard');
});

Route::get('/erb/settings', function () {
    return view('erb.settings');
});

// iacuc
Route::get('/iacuc/research-records', function () {
    return view('iacuc.research-records');
});

Route::get('/iacuc/pending-accounts', function () {
    return view('iacuc.pending-accounts');
});

Route::get('/iacuc/approved-accounts', function () {
    return view('iacuc.approved-accounts');
});

Route::get('/iacuc/pending-reviews', function () {
    return view('iacuc.pending-reviews');
});

Route::get('/iacuc/assign-reviewer', function () {
    return view('iacuc.assign-reviewer');
});

Route::get('/iacuc/reviewers-checklist', function () {
    return view('iacuc.reviewers-checklist');
});

Route::get('/iacuc/dashboard', function () {
    return view('iacuc.dashboard');
});

Route::get('/iacuc/settings', function () {
    return view('iacuc.settings');
});

// superadmin
Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard');
})->name('superadmin.dashboard');

Route::get('/superadmin/accounts-classifications', function () {
    return view('superadmin.accounts-classifications');
})->name('superadmin.accounts.classifications');

Route::get('/superadmin/pending-reviews', function () {
    return view('superadmin.pending-reviews');
})->name('superadmin.pending-reviews');

Route::get('/superadmin/permission-control', function () {
    return view('superadmin.permission-control');
})->name('superadmin.permission.control');

Route::get('/superadmin/assign-reviewer', function () {
    return view('superadmin.assign-reviewer');
})->name('superadmin.assign.reviewer');

Route::get('/superadmin/research-records', function () {
    return view('superadmin.research-records');
})->name('superadmin.research.records');

Route::get('/superadmin/reviewers-checklist', function () {
    return view('superadmin.reviewers-checklist');
})->name('superadmin.reviewers.checklist');

Route::get('/superadmin/settings', function () {
    return view('superadmin.settings');
})->name('superadmin.settings');

// reviewer
Route::get('/reviewer/dashboard', function () {
    return view('reviewer.dashboard');
})->name('reviewer.dashboard');

Route::get('/reviewer/protocol-assign', function () {
    return view('reviewer.protocol-assign');
})->name('reviewer.protocol.assign');

Route::get('/reviewer/settings', function () {
    return view('reviewer.settings');
})->name('reviewer.settings');

// student
Route::get('/student/dashboard', function () {
    return view('student.dashboard');
})->name('student.dashboard');

Route::get('/student/submit-forms', function () {
    return view('student.submit-forms');
})->name('student.submit.forms');

Route::get('/student/submit-tickets', function () {
    return view('student.submit-tickets');
})->name('student.submit-tickets');

Route::get('/student/download-forms', function () {
    return view('student.download-forms');
})->name('student.download.forms');

Route::get('/student/settings', function () {
    return view('student.settings');
})->name('student.settings');

//Storing Data through superadmin's permission-control
Route::get('/superadmin/permission-control', [AdminController::class, 'index'])->name('permission-control');
Route::post('/superadmin/store', [AdminController::class, 'store'])->name('superadmin.store');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

//Verification for login
Route::get('/superadmin/dashboard', function () {
    return view('superadmin.dashboard'); // create this view or controller action
})->name('superadmin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// submit forms layout na mala ms teams
Route::get('student/submit-form-layout', function () {
    return view('student.submit-form-layout');
});

require __DIR__.'/auth.php';
