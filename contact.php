<!DOCTYPE html>
<html>
<brick name="head" />

<body>
<header>
    <title>Karin Oosterveer - Home</title>
    <div class="text-center header">
        <img src="/static/site/rsz_1hand.png" class="rounded" alt="Hand">
        <img src="/static/site/rsz_vector_smart_object.png" class="rounded" alt="Text">

    </div>

    <brick name="navbar"/>

    <img data-lid="1" src="/static/site/home-header-image.png" class="img-fluid" alt="home-header">
</header>


<div class="content">
    <div class="container">
        <div class="row no-gutters">
            <div class="col col-md-4">
                <div class="cnr-quote" data-lid="3" data-rich-text="true">
                    <p>Geeft uw kind de</p>
                    <p>sleutel weer in</p>
                    <p>handen!</p>
                </div>
            </div>
            <div class="col col-md-8">
                <div class="cnr-content">
                    <div data-lid="4" data-rich-text="true">

                        <h4>Contact</h4>
                        <p>De Ruijtbaan 81<br />2685 RS<br />Poeldijk</p>
                        <p><a href="https://www.google.nl/maps/place/De+Ruijtbaan+81,+2685+Poeldijk/@52.0274946,4.230757,17z/data=!3m1!4b1!4m2!3m1!1s0x47c5b22bae118469:0x869a84ee8f02f649">Locatie</a></p>
                        <p><strong>M</strong>. + 31 06 57 95 26 22</p>
                        <p><strong>E. <a href="mailto:info@karinoosterveertherapie.nl">info@karinoosterveertherapie.nl</A></strong><br /><br /></p>
                        <p>KvK. 27377518</p>
                        <p>&nbsp;</p>
                        <form action="/formulier/naam-formulier" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="name">Naam(verplicht)</label> <input id="name" class="form-control" required="" type="text" placeholder="Naam" /><br />

                                <label for="exampleInputEmail1">Emailadres(verplicht)</label> <input id="exampleInputEmail1" class="form-control" required="" type="email" placeholder="Email" aria-describedby="emailHelp" /> <small id="emailHelp" class="form-text text-muted">Uw e-mailadres wordt nergens gedeeld
                                </small><br />

                                <label for="telefoonnummer">Telefoonnummer</label>
                                <input id="telefoonnummer" class="form-control" type="number" placeholder="Telefoonnummer" /><br />
                                <label for="onderwerp">Onderwerp</label> <input id="onderwerp" class="form-control" type="text" placeholder="Onderwerp" /><br />
                                <label for="bericht">Bericht</label> <textarea id="bericht" class="form-control" rows="3" >Laat een bericht achter.</textarea><br /> <button class="btn btn-primary" type="submit">Verstuur</button> <input class="hidden" name="lumen:honeypot"
                                                                                                                                                                                                                                            type="text" />
                                <input type="hidden" name="lumen:returnurl" value="/nl/bedankt" />
                                <input type="hidden" name="lumen:mailto" value="info@karinoosterveertherapie.nl" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-3">
                    <div class="content-image">
                        <img data-lid="2" class="img-fluid" src="/static/site/textpage-image.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!--<brick name="backgroundimage"/>-->


<brick name="footer" />
<brick name="scripts" />
</body>

</html>