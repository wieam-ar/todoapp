<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/Dash_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid d-flex">
        <div class="sidebar">
            <div class="app-title">To-Do App</div>
            <!-- Button trigger modal -->
            <button type="button" class="add-task-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD TASKS
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">TASK title</h1>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-item active">Dashboard</div>
            <div class="nav-item">Active</div>
            <div class="nav-item">Completed</div>
        </div>

        <div class="main-content">
            <div class="header ">

                <h1
                    class="text-dark" style="font-size: 30px;">Dashboard
                </h1>
                <button class="sync-btn">sign up</button>


            </div>
            <div class="tasks d-flex">
                <div class="text-gree " >
                    <div class="greeting">Hello, Beautiful Human!</div>
                    <p>What do you want to do today?</p>
                </div>

                <img src="Todo_img.png" alt="pic" style="width: 200px;">
            </div>


            <div class="tasks-header  pt-5">
                <div class="tasks-title">Today's Tasks</div>
                <div class="date"><?php getdate() ?></div>
            </div>

            <div class="tasks-container ">
                <div class="tasks-list">
                    <div class="task-item">
                        <div class="task-checkbox"></div>
                        <div class="task-label">Buy monthly groceries</div>
                    </div>
                    <div class="task-item">
                        <div class="task-checkbox"></div>
                        <div class="task-label">Pick up the kids</div>
                    </div>
                    <div class="task-item">
                        <div class="task-checkbox"></div>
                        <div class="task-label">Get nails and hair done</div>
                    </div>
                    <div class="priority-task">Prepare presentations</div>
                    <div class="priority-task">Go to the gym</div>
                </div>

                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon">✓</div>
                        <div class="stat-value">40%</div>
                        <div class="stat-label">Completed Tasks</div>
                    </div>
                    <div class="stat-card second-card">
                        <div class="stat-icon">⏱</div>
                        <div class="stat-value">60%</div>
                        <div class="stat-label">Tasks in Progress</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="dash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>

</html>