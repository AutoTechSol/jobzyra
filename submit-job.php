<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #f44336;
            padding: 20px;
            color: white;
            text-align: center;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .addBtn {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
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
    <h2>Add Job</h2>
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
      
