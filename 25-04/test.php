<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // begin the transaction
  $conn->beginTransaction();
  // our SQL statements
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Mary', 'Moe', 'mary@example.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Julie', 'Dooley', 'julie@example.com')");

  // commit the transaction
  $conn->commit();
  echo "New records created successfully \n";
} catch(PDOException $e) {
  // roll back the transaction if something failed
  $conn->rollback();
  echo "Error: " . $e->getMessage();
}

$conn = null;
?>

Câu 1: Một số extension trong vscode giúp auto format source code, check các lỗi như chính tả, lỗi khai báo :

-- Prettier
-- Eslint
-- Editorconfig
-- Beatify

Thư mục .vscode để ghi đè các cài đặt của vscode

Câu 2: Cách config các extension, tạo thư mục .vscode

Cấu hình thư mục .vscode

-- File setting.json
 
 "files.eol": "\n",
 "editor.rulers": [80],
 "workbench.colorCustomizations": {
   "editorRuler.foreground": "#ff6347"
 },
 "editor.renderWhitespace": "all",
 "workbench.colorTheme": "Monokai Pro",
 "editor.codeActionsOnSave": {
   "source.organizeImports": true
 },
 "terminal.integrated.defaultProfile.windows": "Git Bash",
 "javascript.updateImportsOnFileMove.enabled": "always",
 "[javascript]": {
   "editor.defaultFormatter": "esbenp.prettier-vscode"
 },
 "editor.formatOnSave": true

-- File extension.json
 "recommendations": [
   "esbenp.prettier-vscode",
   "eamodio.gitlens",
   "EditorConfig.EditorConfig",
   "dbaeumer.vscode-eslint",
   "streetsidesoftware.code-spell-checker",
   "dsznajder.es7-react-js-snippets"
 ],
 "unwantedRecommendations": []

-- Cấu hình prettier
 "trailingComma": "all",
 "tabWidth": 2,
 "semi": false,
 "singleQuote": true,
 "endOfLine": "lf",
 "editor.formatOnSave": false

-- Cấu hình editorconfig
root = true
 
[*]
indent_style = space
indent_size = 2
end_of_line = lf
charset = utf-8
trim_trailing_whitespace = true
insert_final_newline = true

-- Cấu hình config beatify . jsbeautifyrc

{
  "indent_size": 4,
  "indent_char": " ",
  "css": {
    "indent_size": 2
  }
}

-- File beautiful.language

{
  "beautify.language": {
    "js": {
      "type": ["javascript", "json"],
      "filename": [".jshintrc", ".jsbeautifyrc"]
      // "ext": ["js", "json"]
      // ^^ to set extensions to be beautified using the javascript beautifier
    },
    "css": ["css", "scss"],
    "html": ["htm", "html"]
    // ^^ providing just an array sets the VS Code file type
  }
}