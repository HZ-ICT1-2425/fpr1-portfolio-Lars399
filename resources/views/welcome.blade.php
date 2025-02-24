@extends('components.layout.main')

@section('content')

    <!-- First Row -->
    <div class="row triangle-background">
        <div class="col-sm-2"></div>

        <div class="col-sm-3">
            <img alt="Me" class="indeximgmyself" src="{{ asset('img/mezelf.jpg') }}" />
        </div>

        <div class="col-sm-5">
            <div class="textboxindex">
                <h3>Who am I?</h3>
                <p>
                    My name is Lars, I'm 20 years old, and I live on the Dutch/Belgium
                    border. I have 3 years of experience in ICT from my studies at
                    Scalda Terneuzen.
                </p>
            </div>
        </div>

        <div class="col-sm-2"></div>
    </div>

    <!-- Second Row -->
    <div class="row triangle-background-reverse">
        <div class="col-sm-2"></div>

        <div class="col-sm-4">
            <div class="textboxindex">
                <h3>Why did I apply to this study?</h3>
                <p>
                    I wanted to continue learning ICT and expand my knowledge in coding
                    and app or game development. During my previous studies, I learned
                    web development with HTML, CSS, PHP, and JavaScript, but I want to
                    explore more languages and skills to enter the ICT field.
                </p>
            </div>
        </div>

        <div class="col-sm-4">
            <img alt="ICT 1" class="indeximg1" src="{{ asset('img/ict img 1.png') }}" />
            <a href="{{ asset('img/ict img 1.png') }}" target="_blank" class="btn btncollour">
                Original photo
            </a>
        </div>

        <div class="col-sm-2"></div>
    </div>

    <!-- Third Row -->
    <div class="row rowcontentindex triangle-background">
        <div class="col-sm-2"></div>

        <div class="col-sm-4">
            <img alt="ICT 2" class="indeximg2" src="{{ asset('img/ict img 2.jpg') }}" />
            <a href="{{ asset('img/ict img 2.jpg') }}" target="_blank" class="btn btncollour">
                Original photo
            </a>
        </div>

        <div class="col-sm-4">
            <div class="textboxindex">
                <h3>Why ICT and not any other field?</h3>
                <p>
                    I have always enjoyed gaming on various platforms like PC, Wii, and
                    Xbox 360. When I realized my dream job wasn't possible, I found a
                    passion for ICT through coding and events hosted by the Dutch army
                    and police, which sparked my interest further. My goal is to
                    complete my studies and pursue a career in one of these fields.
                </p>
            </div>
        </div>

        <div class="col-sm-2"></div>
    </div>

    <!-- Fourth Row: Table -->
    <div class="row tablerowindex triangle-background-reverse">
        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <div class="tableboxindex">
                <table class="indextable">
                    <thead>
                    <tr>
                        <th>Fun Things About Coding</th>
                        <th>Not Fun Things About Coding</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Creative Problem Solving</td>
                        <td>Debugging Issues</td>
                    </tr>
                    <tr>
                        <td>Immediate Feedback</td>
                        <td>Cross-Browser Compatibility</td>
                    </tr>
                    <tr>
                        <td>Building Responsive Websites</td>
                        <td>Dealing with CSS Bugs</td>
                    </tr>
                    <tr>
                        <td>Learning New Frameworks</td>
                        <td>Steep Learning Curves</td>
                    </tr>
                    <tr>
                        <td>Flexibility & Customization</td>
                        <td>Performance Optimization</td>
                    </tr>
                    <tr>
                        <td>Community Support</td>
                        <td>Outdated Documentation</td>
                    </tr>
                    <tr>
                        <td>Sense of Achievement</td>
                        <td>Never-Ending Updates</td>
                    </tr>
                    <tr>
                        <td>Automation & Tools</td>
                        <td>Scope Creep</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-sm-4"></div>
    </div>

@endsection
