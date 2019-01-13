<?php include('includes/header.html') ?>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    About me
                </h1>
            </div>
            <div class="col-md-9">
              <p>
                I am a 4th year student in Physics and Astrophysics at the University of Toronto Scarborough. I am interested in all things related to 
                mathematical and numerical methods in astrophysics. Primarily, I am interested in finding the answers to questions about how planetary
                systems form. This includes studying how planets form, the dynamics of astrphysical disks and the dynamics of bodies in the solar system.
                I enjoy using and developping numerical tools to help answer these questions.
              <p>
                In 2017, I worked with Professor Pawel Artymowicz to study Type III planet migration. We developped a high performance NBody integrator that 
                is able to solve the 3XNBody problem for particle disks with up to 5 billion particles for 1,000 to 10,000 orbits of an embedded planet. 
                We used this to study Type III planet migration in high resolution in 3D by computing the torques applied by the particles. We found that for
                rapid migration of large planets, the results of a particle disk simulation are very similar to those found from CFD simulations.
              </p>
              <p>
                  This year I worked with Dr. Almog Yalinewich studying the formation of impact craters from high velocity impactors. We used self similar
                  analysis and CFD simulations to determine the how the radius of a crater evolves in time and how this relation depends on the impact velocity
                  and physical parameters of the impactor. We applied this to estimate the distribution of asteroids in the early solar system by using crater
                  counts from the moon.
              </p>
              <p>
                Outside of research and courses, I enjoy teaching. I have been a teaching assistant for PHYA10 (Introduction to Physics), ASTA01 (Introduction to the 
                Astrophysics of Planetary Systems), CSCA08 (Introduction to Computer Science) and CSCA20 (Introduction to Programming). I have also organized and
                facilitated Python programming workshops for 1st year physics students. 
              </p>
              <p>
                  When I am not working or studying, I enjoy mountain biking, hiking and just generally being outdoors. I also enjoy commuting around Toronto
                  by bike. It is a great way to stay fit without whithough taking extra time out of your day!
              </p>
            </div>
            <div class="col-md-3">
              <img src="images/fergus.png" class="img-thumbnail" width="350px" height="350px" align="right" />
            </div>

            <div class="col-md-6">
              <h2>Short CV</h2>

              <h3>Education</h3>
              <p class="indent">
                <b>Undergraduate studies in Physical and Mathematical Sciences</b><br />
                <t>2016 - Present: University of Toronto, Scarborough Campus</t>
              </p>
            
              <h3>Research</h3>
              <p class="indent">
                    <b>Summer Undergraduate Research Fellowship, CITA at U of T - Summer 2018</b><br />
                    <t>Supervisor: Dr. Almog Yalinewich</t><br />
                    <t>Scaling Relations for Impact Craters.</t>
              </p>

              <p class="indent">
                    <b>Summer Undergraduate Research Fellowship, CPS at UTSC - Summer 2017</b><br />
                    <t>Supervisor: Professor Pawel Artymowicz</t><br />
                    <t>Study of Type III Planet Migration with Large Scale NBody and CFD.</t>
              </p>

            </div>

            <div class="col-md-6">
                <h1> </h1>
              <h2>Awards/Grants</h2>
              <p class="indent">
                    <b>CITA Summer Undergraduate Research Fellowship (Summer 2017)</b><br />
                    Canadian Institute for Theoretical Astrophysics, University of Toronto
                  </p>
              <p class="indent">
                <b>CPS Summer Undergraduate Research Fellowship (Summer 2017)</b><br />
                Center for Planetary Science at UTSC
              </p>


              <h2>Conferences:</h2>
            <p class="indent">
              <b>Aug 13-16 2017: Toronto Meeting on Numerical Methods in Planetary Sciences</b>
              Presentation Title: High Perforamace Particle Integration on CPU, GPU and MIC
              Location: Toronto, CAN
            </p>
            <p class="indent">
              <b>Nov 20-24 2017: Workshop on Numerical Simulations of Planet-disc Interactions</b>
              Presentation Title: Study of Type III Planet Migration with Large Scale NBody and CFD
              Location: Cuernavaca, MX
            </p>

            </div>

        </div>

<?php include('includes/footer.html') ?>