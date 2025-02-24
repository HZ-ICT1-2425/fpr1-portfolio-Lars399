@extends('components.layout.main')

@section('content')

    <div class="row triangle-background">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <div class="textboxprofile">
                <p>
                    Hi, my name is Lars. I'm 20 years old and live in Koewacht, the
                    Netherlands.
                    <br />Koewacht is a small village on the Belgian border. <br />In my
                    free time, I enjoy gaming, mostly *War Thunder* or *Dead by
                    Daylight*. <br />I’ve been into photography for five years, and I'm
                    a big Star Wars fan and Lego collector.
                </p>
            </div>
        </div>
        <div class="col-sm-4">
            <img
                alt="img of a Bugatti"
                src="img/profileimg.jpg"
                class="profileimg"
            />
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <div class="tableborderprofile">
                <table
                    class="table table-bordered tablebackgroundprofile tableborderround"
                >
                    <thead>
                    <tr>
                        <th>Characteristic</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Big Star Wars fan</td>
                    </tr>
                    <tr>
                        <td>Photography</td>
                    </tr>
                    <tr>
                        <td>Experience in web development</td>
                    </tr>
                    <tr>
                        <td>Car and motorcycle enthusiast</td>
                    </tr>
                    <tr>
                        <td>Avid gamer</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="textboxprofile">
                <p>
                    I started coding three years ago at Scalda Terneuzen.
                    <br />My first experience with coding was in high school, where I
                    made a game using Python and Turtle. <br />Now, I can code in HTML,
                    CSS, PHP, JavaScript, and some Python. I also know how to use
                    WordPress and configure DNS for IP addresses.
                </p>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row profilemargintop">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="tableborderprofile">
                <table class="table table-bordered tablebackgroundprofile">
                    <thead>
                    <tr class="tablecontentcenter">
                        <th>Social Media</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="tablecontentcenter">
                        <td>
                            <i
                                class="fa fa-instagram backgroundcoloricons"
                                style="font-size: 36px; cursor: pointer;"
                                onclick="instagram()"
                            ></i>
                        </td>
                    </tr>
                    <tr class="tablecontentcenter">
                        <td>
                            <i
                                class="fa fa-github backgroundcoloricons"
                                style="font-size: 36px; cursor: pointer;"
                                onclick="github()"
                            ></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br />

@endsection
