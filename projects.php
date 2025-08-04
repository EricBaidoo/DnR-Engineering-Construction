
<?php include 'header.php'; ?>

<style>
  .projects-container {
    max-width: 90%;
    margin: 5rem auto 0 auto;
    padding: 5rem 2rem 1rem 2rem;
    background: #f9f9f9;
    border-radius: 0.75rem;
    box-shadow: 0 0.125rem 0.75rem rgba(0,0,0,0.07);
  }
  .projects-header {
    text-align: center;
  }
  .projects-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #0d47a1;
    margin-bottom: 0.5rem;
  }
  .projects-subtitle {
    font-size: 1.2em;
    color: #0d47a1;
    margin-bottom: 0.5rem;
  }
  .project-item {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 2rem;
    margin: 2.5rem 0;
    padding: 2.5rem 2rem;
    background: #fff;
    border-radius: 0.625rem;
    box-shadow: 0 0.125rem 0.75rem rgba(0,0,0,0.08);
    transition: box-shadow 0.2s;
  }
  .project-item:hover {
    box-shadow: 0 0.25rem 1.2rem rgba(13, 71, 161, 0.13);
  }
  .project-image {
    flex: 1 1 35%;
    min-width: 220px;
    max-width: 400px;
    padding-right: 2rem;
  }
  .project-image img {
    width: 100%;
    height: auto;
    border-radius: 0.5rem;
    box-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.06);
    display: block;
  }
  .project-details {
    flex: 2 1 60%;
    min-width: 220px;
    padding-left: 2rem;
  }
  .project-title {
    font-size: 2em;
    color: #0d47a1;
    margin: 1rem 0;
    font-weight: 600;
  }
  .project-description {
    font-size: 1.08em;
    color: #444;
    margin: 2rem 0;
    line-height: 1.7;
  }
  @media (max-width: 900px) {
    .projects-container {
      padding: 2.5rem 1rem 0.5rem 1rem;
    }
    .project-item {
      flex-direction: column;
      padding: 2rem 1rem;
      gap: 1.2rem;
    }
    .project-image, .project-details {
      padding: 0;
      min-width: 0;
      max-width: 100%;
    }
    .project-title {
      font-size: 1.5em;
    }
    .projects-title {
      font-size: 2em;
    }
  }
  @media (max-width: 600px) {
    .projects-container {
      margin: 2rem auto 0 auto;
      padding: 1.2rem 0.5rem 0.5rem 0.5rem;
    }
    .project-item {
      margin: 1.2rem 0;
      padding: 1rem 0.5rem;
    }
    .project-title {
      font-size: 1.1em;
    }
    .projects-title {
      font-size: 1.3em;
    }
    .project-description {
      font-size: 1em;
      margin: 1rem 0;
    }
  }
</style>

<!-- =======================
     PROJECTS SECTION
======================== -->

<div class="projects-container">
    <div class="projects-header">
        <h2 class="projects-title">Our Projects</h2>
        <p class="projects-subtitle">A showcase of our recent work and achievements.</p>
    </div>
</div>

<!-- CONTAINER FOR VARIOUS PROJECTS -->
<div class="projects" style="max-width: 90%; margin: 0 auto;">
    <div class="project-item" style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem; margin: 2.5rem 0; padding: 2.5rem 2rem; background: #fff; border-radius: 0.625rem; box-shadow: 0 0.125rem 0.75rem rgba(0,0,0,0.08);">
        <!-- Project Image Column -->
        <div class="project-image" style="flex: 1 1 35%; min-width: 28%; max-width: 40%; padding-right: 2rem;">
            <img src="assets\images\IMG_0925.jpg" alt="Modern Office Complex – Accra" style="width: 100%; height: auto; border-radius: 0.5rem; box-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.06);">
        </div>
        <!-- Project Description Column -->
        <div class="project-details" style="flex: 2 1 60%; min-width: 28%; padding-left: 2rem;">
            <h3 class="project-title" style="font-size: 2em; color: #0d47a1; margin: 1rem; font-weight: 600;">Modern Office Complex – Accra</h3>
            <p class="project-description" style="font-size: 1.08em; color: #444; margin: 2rem;">
                This project involved the design and construction of a state-of-the-art office complex located in Accra.
                 The building features contemporary architectural elements, 
                 advanced energy-efficient systems, and flexible workspace layouts 
                 to accommodate diverse business needs. Key highlights include open-plan offices,
                  collaborative meeting areas, smart building technologies for security and climate 
                  control, and sustainable materials throughout. The project was managed from concept
                   to completion, ensuring timely delivery, adherence to budget, and compliance with 
                   all safety and regulatory standards. The result is a modern, professional 
                   environment that supports productivity, innovation, and future expansion for 
                   its occupants.
            </p>
        </div>
    </div>
    <!-- Project 2 -->
     <div class="project-item" style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem; margin: 2.5rem 0; padding: 2.5rem 2rem; background: #fff; border-radius: 0.625rem; box-shadow: 0 0.125rem 0.75rem rgba(0,0,0,0.08);">
        <!-- Project Image Column -->
        <div class="project-image" style="flex: 1 1 35%; min-width: 28%; max-width: 40%; padding-right: 2rem;">
            <img src="assets/images/IMG_4314.jpg" alt="Block Fencing – 12 Acre Land, Berekuso" style="width: 100%; height: auto; border-radius: 0.5rem; box-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.06);">
        </div>
        <!-- Project Description Column -->
        <div class="project-details" style="flex: 2 1 60%; min-width: 28%; padding-left: 2rem;">
            <h3 class="project-title" style="font-size: 2em; color: #0d47a1; margin: 1rem; font-weight: 600;">Block Fencing – 12 Acre Land, Berekuso</h3>
            <p class="project-description" style="font-size: 1.08em; color: #444; margin: 2rem;">
                Secure perimeter block fencing for a 12-acre property at Berekuso, designed to provide 
                safety, privacy, and long-term durability. Our team delivered robust construction
                using quality materials, ensuring the land is well-protected and ready for future
                development. The project included thorough site preparation, precise boundary
                demarcation, and installation of reinforced concrete pillars for enhanced stability.
                We incorporated anti-climb features and weather-resistant finishes to maximize
                security and minimize maintenance. Coordination with local authorities ensured
                compliance with zoning and environmental regulations. The completed fencing
                not only safeguards the property but also adds value and visual appeal, supporting
                the client’s plans for expansion and investment.
            </p>
        </div>
    </div>

     <!-- Project 3-->
     <div class="project-item" style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem; margin: 2.5rem 0; padding: 2.5rem 2rem; background: #fff; border-radius: 0.625rem; box-shadow: 0 0.125rem 0.75rem rgba(0,0,0,0.08);">
        <!-- Project Image Column -->
        <div class="project-image" style="flex: 1 1 35%; min-width: 28%; max-width: 40%; padding-right: 2rem;">
            <img src="assets/images/IMG_2100.jpg" alt="Modern Office Complex – Accra" style="width: 100%; height: auto; border-radius: 0.5rem; box-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.06);">
        </div>
        <!-- Project Description Column -->
        <div class="project-details" style="flex: 2 1 60%; min-width: 28%; padding-left: 2rem;">
            <h3 class="project-title" style="font-size: 2em; color: #0d47a1; margin: 1rem; font-weight: 600;">Renovation – 3-Storey Hostel Building</h3>
            <p class="project-description" style="font-size: 1.08em; color: #444; margin: 2rem;">
            Comprehensive renovation of a three-storey hostel building, including structural upgrades,
            modernized interiors, and enhanced safety features. The project focused on improving comfort,
            energy efficiency, and long-term durability for residents, delivering a refreshed and functional
            living environment. Key aspects included the replacement of outdated electrical and plumbing systems,
            installation of energy-saving lighting and climate control, and the use of sustainable building materials.
            All rooms and common areas were redesigned for better space utilization, natural light, and accessibility.
            Fire safety systems and secure access controls were added to ensure resident protection. The renovation
            was completed with minimal disruption to occupants, and the result is a modern, safe, and welcoming hostel
            that meets current standards and supports the well-being of its residents.
            </p>
        </div>
    </div>

     <!-- Project 3-->
     <div class="project-item" style="display: flex; flex-wrap: wrap; align-items: center; gap: 2rem; margin: 2.5rem 0; padding: 2.5rem 2rem; background: #fff; border-radius: 0.625rem; box-shadow: 0 0.125rem 0.75rem rgba(0,0,0,0.08);">
        <!-- Project Image Column -->
        <div class="project-image" style="flex: 1 1 35%; min-width: 28%; max-width: 40%; padding-right: 2rem;">
            <img src="assets/images/IMG-20250729-WA0001.jpg" alt="Modern Office Complex – Accra" style="width: 100%; height: auto; border-radius: 0.5rem; box-shadow: 0 0.125rem 0.5rem rgba(0,0,0,0.06);">
        </div>
        <!-- Project Description Column -->
        <div class="project-details" style="flex: 2 1 60%; min-width: 28%; padding-left: 2rem;">
            <h3 class="project-title" style="font-size: 2em; color: #0d47a1; margin: 1rem; font-weight: 600;">General arrangement of rebars for basement construction</h3>
            <p class="project-description" style="font-size: 1.08em; color: #444; margin: 2rem;">
            Detailed planning and arrangement of reinforcement bars (rebars) for the basement construction phase, ensuring structural integrity and compliance with safety standards. This project involved precise calculations and layout designs to optimize the use of materials and enhance the overall stability of the building.
            installation of energy-saving lighting and climate control, and the use of sustainable building materials.
            All rooms and common areas were redesigned for better space utilization, natural light, and accessibility.
            Fire safety systems and secure access controls were added to ensure resident protection. The renovation
            was completed with minimal disruption to occupants, and the result is a modern, safe, and welcoming hostel
            that meets current standards and supports the well-being of its residents.
            </p>
        </div>
    </div>







</div>

    



<!-- PROJECT END -->

<?php include 'footer.php'; ?>