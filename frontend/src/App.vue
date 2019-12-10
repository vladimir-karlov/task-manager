<template>

    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    Task Manager
                </a>
            </div>
        </nav>

        <div class="py-4">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body table-responsive">
                        
                                <Task></Task>                 
                        
                              <vue-progress-bar></vue-progress-bar>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>