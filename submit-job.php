<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            min-width: 250px;
            font-family: Arial, sans-serif;
        }
        * {
            box-sizing: border-box;
        }
        .header {
            background-color: #f44336;
            padding: 30px 40px;
            color: white;
            text-align: center;
        }
        input, textarea {
            margin: 10px 0;
            padding: 10px;
            width: calc(100% - 20px);
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .addBtn {
            padding: 10px;
            background: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            width: 100%;
            transition: background-color 0.3s;
        }
        .addBtn:hover {
            background-color: #45a049;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background: #eee;
            padding: 15px;
            margin: 10px 0;
            border-radius: 4px;
            position: relative;
        }
        .close {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
            color: #f44336;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Post a Job</h2>
    <input type="text" id="jobTitle" placeholder="Job Title...">
    <textarea id="jobDescription" placeholder="Job Description..." rows="3"></textarea>
    <button onclick="addJob()" class="addBtn">Add Job</button>
</div>

<ul id="jobList"></ul>

<script>
// Function to add a new job
function addJob() {
    const title = document.getElementById("jobTitle").value.trim();
    const description = document.getElementById("jobDescription").value.trim();

    if (title === '' || description === '') {
        alert("You must write a job title and description!");
        return;
    }

    addJobToList(title, description);

    // Clear input fields
    document.getElementById("jobTitle").value = "";
    document.getElementById("jobDescription").value = "";
}

// Function to display the job in the list
function addJobToList(title, description) {
    const li = document.createElement("li");
    li.innerHTML = `<strong>${title}</strong><br>${description}<span class="close" onclick="removeJob(this)">&times;</span>`;
    document.getElementById("jobList").appendChild(li);
}

// Remove job from the list
function removeJob(element) {
    const jobList = document.getElementById("jobList");
    jobList.removeChild(element.parentElement);
}
</script>

</body>
</html>
