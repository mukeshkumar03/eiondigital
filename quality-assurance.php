<!DOCTYPE html>
<html lang="en">
<?php
$title = 'EION Digital: QA and Automation';
include './head.php';
?>

<body>
    <?php
    $active_link = 'Services';
    include './header.php';
    ?>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <p class="display-4 text-white animated zoomIn">
                    Automation streamlines and accelerates the testing process
                </p>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">
                    QA & Automation Testing
                </h5>
                <h1>Ensures that software meet predefined quality standards</h1>
                <p class="mb-0">
                    Our QA professionals will maintain a well-structured and modular
                    automation and manual testing to avoid any business impact.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Test Design</h4>
                        <p class="m-0">
                            QA engineers design test cases based on the requirements. These test
                            cases encompass positive and negative scenarios, edge cases, and
                            user interactions. Focus on repetitive, critical, and time-consuming
                            scenarios for automation. QA professionals ensure that the right
                            data is available to simulate various scenarios.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Test Execution</h4>
                        <p class="m-0">
                            Verify the application's functionality, usability, and user
                            experience. Automation engineers write scripts using automation
                            tools such as Selenium, Appium. Integrate automation into the CI
                            pipeline to run automated tests whenever new code is committed. Bugs
                            and defects are documented and reported.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Defect Tracking</h4>
                        <p class="m-0">
                            QA team report defects using bug tracking tools like Jira or
                            Bugzilla. Each bug is documented with details, severity, and steps
                            to reproduce. Once reported issues has been fixed, QA again verifies
                            the fixes through regression testing. Prepare a summary report that
                            outlines the overall quality of the software.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Regression & Performance Testing</h4>
                        <p class="m-0">
                            We'll ensure that new code changes do not introduce unintended side
                            effects in existing functionality. To assess the application's
                            performance under expected load conditions, load testing tools like
                            Apache JMeter or LoadRunner are employed.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Reporting & Documentation</h4>
                        <p class="m-0">
                            QA teams generate comprehensive test reports detailing test results,
                            including pass/fail status, defects found, and test coverage.
                            Maintain up-to-date documentation for test cases, test data, and
                            automation scripts. Bugs and defects are documented and reported.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 wow zoomIn" data-wow-delay="0.9s">
                    <div
                        class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <h4 class="mb-3">Test Closure</h4>
                        <p class="m-0">
                            Will prepare a summary report that outlines the overall quality of
                            the software, highlighting any pending issues. Conduct a review to
                            identify areas for improvement and document lessons learned for
                            future projects. Well-defined testing process, help in reduce
                            defects, and deliver a superior user experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <?php include('./widgets/quote.php') ?>

    <?php include('./footer.php') ?>
</body>

</html>