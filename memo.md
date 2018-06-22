// # git_tutorialという文字列をREADME.mdに追記(README.mdがなければ作成される?)
echo "# git_tutorial" >> README.md

// gitをここで使うよという宣言
git init

// gitにREADME.mdというファイルを追加するよという宣言
git add README.md

// gitに追加、変更された内容をメッセージをつけて登録
git commit -m "first commit"

// gitのリモートリポジトリを登録
git remote add origin git@github.com:shoooobc/git_tutorial.git

// gitのリモートリポジトリに変更された内容を登録
git push -u origin master

//名前を登録
git config --global user.name "aoki sho"

//メールアドレスを登録
git config --global user.email shoooo.b.c@icloud.com

// gitに無視させるファイル、ディレクトリを定義するファイルを作成
touch .gitignore
