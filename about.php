<?php
// Fetch data for the about page
$aboutContent = "Our website revolves around the concept of e-Mading, which stands for e-Bulletin Board. It serves as an online platform designed to provide information, announcements, and the latest news within an organization or institution. Typically, e-Mading finds its primary application in educational environments, such as schools or universities, aiming to facilitate the dissemination of information to students, teachers, and staff.

The main objective of e-Mading is to offer quick and efficient access to announcements, event schedules, school news, and other vital information. By leveraging this platform, members of the educational community can easily access such information without relying on traditional print media or conventional communication channels.

Common features of e-Mading include:

<p> -Event Announcements: Information regarding activities, seminars, workshops, and other events.</p>
<p> -School News: Summaries of news or recent developments within the school or campus.</p>
<p> -Agenda: Schedules of upcoming activities and events.</p>
<p> -Gallery: Displaying photos and documentation of various activities.</p>

Utilizing e-Mading, users can stay well-informed and engaged with the latest developments and activities in their community.";

// Include the header template
include('template/header.php');
include('admin/config_query.php');
?>

<section class="about-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mb-4">About the Website - e-Mading (e-Bulletin Board)</h2>
                <p><?php echo $aboutContent; ?></p>
            </div>
        </div>
    </div>
</section>

<?php
// Include the footer template
include('template/footer.php');
?>
