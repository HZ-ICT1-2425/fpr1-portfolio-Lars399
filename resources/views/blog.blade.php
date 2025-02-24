@extends('components.layout.main')

@section('content')

    <div class="row triangle-background-reverse mt-4">
        <div class="col-sm-2"></div>

        <div class="col-sm-8">
            <!-- Post 1 -->
            <div class="backgroundcolorblog">
                <section class="section1">
                    <article class="article1">
                        <header>
                            <h1 class="textcolorblog">Study choice</h1>
                            <p class="textcolorblog">Why did I choose this study?</p>
                        </header>
                        <p class="textcolorblog">
                            I pursued an MBO study and wanted to continue learning ICT.
                        </p>
                        <button class="btn btncollour" onclick="studychoise()">
                            Read more...
                        </button>
                    </article>
                </section>
            </div>

            <!-- Post 2 -->
            <div class="backgroundcolorblog">
                <section class="section2">
                    <article class="article2">
                        <header>
                            <h1 class="textcolorblog">Personal SWOT analysis</h1>
                            <p class="textcolorblog">What is my SWOT analysis?</p>
                        </header>
                        <p class="textcolorblog">Click the button below to find out!</p>
                        <button class="btn btncollour" onclick="swot()">
                            Read more...
                        </button>
                    </article>
                </section>
            </div>

            <!-- Post 3 -->
            <div class="backgroundcolorblog">
                <section class="section3">
                    <article class="article3">
                        <header>
                            <h1 class="textcolorblog">Programming experience</h1>
                            <p class="textcolorblog">I have 3 years of experience</p>
                        </header>
                        <p class="textcolorblog">
                            This experience came from an MBO 4 study at Scalda Terneuzen.
                        </p>
                        <button class="btn btncollour" onclick="experience()">
                            Read more...
                        </button>
                    </article>
                </section>
            </div>

            <!-- Post 4 -->
            <div class="backgroundcolorblog">
                <section class="section4">
                    <article class="article4">
                        <header>
                            <h1 class="textcolorblog">First feedback</h1>
                            <p class="textcolorblog">Feedback I received</p>
                        </header>
                        <p class="textcolorblog">
                            I haven’t received significant feedback yet.
                        </p>
                        <button class="btn btncollour" onclick="feedback()">
                            Read more...
                        </button>
                    </article>
                </section>
            </div>

            <!-- Post 5 -->
            <div class="backgroundcolorblog">
                <section class="section4">
                    <article class="article4">
                        <header>
                            <h1 class="textcolorblog">ICT article</h1>
                            <p class="textcolorblog">A random article about ICT</p>
                        </header>
                        <button class="btn btncollour" onclick="ictarticle()">
                            Read more...
                        </button>
                    </article>
                </section>
            </div>
        </div>

        <div class="col-sm-2"></div>
    </div>

@endsection


<script>

    /**
     * functions to rederact to the blog posts
     */


    function studychoise() {
        window.location.href = "blogpost/studychoise";
    }

    function swot() {
        window.location.href = "blogpost/swot";
    }

    function feedback() {
        window.location.href = "blogpost/feedback";
    }

    function experience() {
        window.location.href = "blogpost/experience";
    }

    function ictarticle() {
        window.location.href = "blogpost/ictarticle";
    }


</script>
