<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step 4. Uploading Supplementary Files</title>
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
                        Step 4. Uploading Supplementary Files
                    </p>
                </div>
                <hr>
            </div>
            <hr>
            <div class="link-step" id="contact">
                <div class="green">1. START</div>
                <div class="green">2. UPLOAD SUBMISSION</div>
                <div class="green">3. ENTER METADATA</div>
                <div class="bold">4. UPLOAD SUPPLEMENTARY FILES</div>
                <div>5. COMFIRMATION</div>
            </div>
            <div>
                <p id="contact">This optional step allows Supplementary Files to be added to a submission. The files, which can be in any format, might include (a) research instruments, (b) data sets, which comply with the terms of the study's research ethics review, (c) sources that otherwise would be unavailable to readers, (d) figures and tables that cannot be integrated into the text itself, or other materials that add to the contribution of the work.</p>
            </div>
            <hr>
            <table>
                <tr class="jarak-kecil">
                    <td id="jarak-uploading-kecil">ID</td>
                    <td id="jarak-uploading-besar">TITLE</td>
                    <td id="jarak-uploading-sedang">ORIGINAL FILE NAME</td>
                    <td id="jarak-uploading-sedang">DATE UPLOADED</td>
                    <td id="jarak-uploading-kanan">ACTION</td>
                </tr>
            </table>
            <hr>
            <div>
                <p style="font-style: italic; padding-left:300px ;">No supplementary files have been added to this submission.</p>
            </div>
            <hr>

            <div class="upload-file">
                <table style="width: 100%;">
                    <tr>
                        <td id="contact" style="padding-right:15%">
                            Upload supplementary file
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
        <div>
            <button class="btn btn-save" onclick="window.location='<?php echo site_url("http://localhost:8080/confirming"); ?>'">
                Save and continue
            </button>
            <button class="btn btn-cancel">
                Cancel
            </button>
        </div>
</body>

</html>