@php
    $messages = [];
    if (session()->has('message')) {
        $messages[] = [
            'class' => 'terminal-alert-primary',
            'content' => session('message'),
        ];
    }
    if (session()->has('error')) {
        $messages[] = [
            'class' => 'terminal-alert-error',
            'content' => session('error'),
        ];
    }
    if (session()->has('warning')) {
        $messages[] = [
            'class' => 'terminal-alert-warning',
            'content' => session('warning'),
        ];
    }
@endphp
@foreach ($messages as $message)
    <div class="terminal-alert {{ $message['class'] }}">{{ $message['content'] }}</div>
@endforeach
