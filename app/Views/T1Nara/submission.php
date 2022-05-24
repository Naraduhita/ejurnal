<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step.2 Uploading the Submission</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="header">
        <p id="text-header">
            Information Techonology Journal
        </p>
    </div>

    <div class="content">
        <div id="submission">
            <div class="link-menu">
                <a href="#" class="green">Home</a>
                <a href=" #" class="green">About</a>
                <a href="#" class="green">User Home</a>
                <a href=" #" class="green">Search</a>
                <a href="#" class="green">Current</a>
                <a href=" #" class="green">Archives</a>
            </div>
            <hr>
            <div class="content-item">
                <div class="link-status">
                    <a href="#" class="green">Home</a>
                    <span>></span>
                    <a href="#" class="green">User</a>
                    <span>></span>
                    <a href="#" class="green">Author</a>
                    <span>></span>
                    <a href="#" class="green">Submission</a>
                    <span>></span>
                    <a href="#" class="green bold">New Submission</a>
                </div>
                <div class="title bold">
                    <p>
                        Step 2. Uploading the Submission
                    </p>
                </div>
                <hr>
                <div class="link-step">
                    <div class="green">1. Start</div>
                    <div class="bold">2. Upload Submission</div>
                    <div>3. Enter Metadata</div>
                    <div>4. Upload Supplementary Files</div>
                    <div>5. Confirmation</div>
                </div>
                <p>
                    To upload a manuscript to this journal, complete the following steps.
                    <br>
                <table class="table-content">
                    <tr>
                        <td>1. </td>
                        <td>On this page, click Browse (or choose File) which opens a Choose File window for locating the file on the hard drive of your computer. </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Locate the file you wish to submit and highligth it.</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Click Open on the Choose File window, which places the name of the file on this page.</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Click Upload on this page, which uploads the file from the computer to the journal's web site and renames it following the journal's conventions.</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Once the submission is uploaded, click Save and Continue at the button of this page.</td>
                    </tr>
                </table>
                <br>
                Encountering difficulities? Contact for assistance.
                </p>
                <hr>
            </div>
            <div>
                <h1 class="submission-file">
                    Submission File
                </h1>
                <p>
                    No submission file uploaded.
                </p>
            </div>
            <hr>
            <div class="upload-file">
                <table style="width: 100%;">
                    <tr>
                        <td style="padding-right:15%">
                            Upload submission file
                        </td>
                        <td>
                            <input type="file" style="border-style: inset;">
                            <button>
                                Upload
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="final-btn">
                <button class="btn btn-save" onclick="window.location='<?php echo site_url("http://localhost:8080/enteringSubmission"); ?>'">
                    Save and continue
                </button>
                <button class="btn btn-cancel">
                    Cancel
                </button>
            </div>
        </div>
    </div>


</body>
<!-- <style>

</style> -->

</html>