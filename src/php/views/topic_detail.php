<main class="container py-3">
    <div class="py-5">
        <div class="row">
            <div class="col">
                <!-- 左側 -->
                <canvas id="chart" width="400" height="400" data-likes="3" data-dislikes="2"></canvas>
                <style>
                    #chart {
                        background-color: gray;
                    }
                </style>
            </div>
            <div class="col my-5">
                <!-- 右側 -->
                <div>
                    <h1>たこ焼きっておいしいですよね。</h1>
                    <span class="mr-1 h5">Posted by テストユーザー</span>
                    <span class="mr-1 h5">&bull;</span>
                    <span class="h5">36 views</span>
                </div>
                <div class="container text-center my-4">
                    <div class="row justify-content-around">
                        <div class="likes-green col-auto">
                            <div class="display-1">2</div>
                            <div class="h4 mb-0">賛成</div>
                        </div>
                        <div class="dislikes-red col-auto">
                            <div class="display-1">3</div>
                            <div class="h4 mb-0">反対</div>
                        </div>
                    </div>
                </div>

                <form action="">
                    <span class="h4">あなたは賛成？それとも反対？</span>
                    <input type="hidden" name="topic_id" value="3">
                    <div class="form-group">
                        <textarea class="w-100 border-light" name="body" id="body" rows="5"></textarea>
                    </div>

                    <div class="container">
                        <div class="row h4 form-group">
                            <div class="col-auto d-flex align-items-center pl-0">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" id="agree" name="agree" value="1" checked>
                                    <label for="agree" class="form-check-label">賛成</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="radio" id="disagree" name="disagree" value="0">
                                    <label for="disagree" class="form-check-label">反対</label>
                                </div>

                            </div>
                            <input type="submit" value="送信" class="col btn btn-success shadow-sm">
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <ul class="list-unstyled">
            <li class="bg-white shadow-sm mb-3 rounded p-3">
                <h2 class="h4 mb-2">
                    <span class="badge badge-success mr-1 align-bottom">賛成</span>
                    <a class="text-body" href="">犬も歩けば棒に当たりますか？</a>
                </h2>
                <span>Commented by テストユーザー</span>
            </li>
        </ul>
    </div>

</main>
<footer class="text-center p-3">
    <span class="text-muted"> &copy; CodeMafia</span>
</footer>