# 332-Class-Project
This project will use MySQL database and PHP to build a web database application.

See [RUBRIC.md](RUBRIC.md) for full requirements and details.

## Group Members
- Jimmy Quach
- Paul Kennedy
- .

## Development
### Environment Variables
Create a .env file at root directory with the following variables with your credentials:
```bash
DB_NAME=cs332f??
DB_USERNAME=cs332f??
DB_PASSWORD=????????
```

### Optional: Using sftp extension
You can download and use the [sftp extension](https://marketplace.visualstudio.com/items?itemName=Natizyskunk.sftp) for vscode to automatically upload changes from local to the remote CSUF server on file save.

Goto .vscode folder, rename `sftp.json.example` to `sftp.json` and edit username, password, and remotePath.
```json
{
    "name": "CSUF Server",
    "host": "shell.ecs.fullerton.edu",
    "protocol": "sftp",
    "port": 22,
    "username": "cs332f??",                         <- edit
    "password": "????????",                         <- edit
    "remotePath": "/home/titan0/cs332f/cs332f??/",  <- edit
    "uploadOnSave": true,
    "ignore": [".vscode", ".git"]
}
```

This way, your changes will reflect at `http://ecs.fullerton.edu/~cs332f??/` while working locally.

You might run into an error like such:
```bash
[warn] ENOENT: no such file or directory, open 'C:\Users\USER\.ssh\config' load C:\Users\USER\.ssh\config failed
```
To fix, just create the missing folder and file (the file can just be empty, it just needs to exist)

1. cover page with names last 4 digit cwid (upload project implementation)
2. ER diagram of design (hw#1)
3. relational model with primary/foreign keys (similar to hw #2)
4.  Source code including DDL that was used to create tables and the SQL implement queries as well as PHP scripts used for implementing user interface
5. screenshots of the interfaces you developed
6. screenshots of sample runs of the system, including inputs and outputs
project uploaded in one of the accounts on the department server
