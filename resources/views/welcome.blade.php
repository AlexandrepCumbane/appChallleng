<!DOCTYPE html>
<html>
<head>
    <title>Project Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Project - Form</h2>
                    </div>
                    <div class="card-body ">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('projects')
                    </div>
                </div>
            </div>

            <div id="app">
                <exemplo></exemplo>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>