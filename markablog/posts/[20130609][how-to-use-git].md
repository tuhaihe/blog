Git 基本操作指南 {{meta}}
-----------------------

## 简介

Linux 内核和 Git 是 Linus 迄今最为杰出的 2 个伟大作品。Git 这个分布式的版本控制系统，由开始开发到项目发布，仅用了 3 天时间。

学会使用 Git，是每个人的必修技能。

<pre class="prettyprint">
<code>
$ sudo apt-get install git # Debian 系列
</code>
</pre>

## 基本操作

1. 设置用户信息
  
   Git 配置文件为 ~/.gitconfig 或系统全局设置 /etc/gitconfig。

   <pre class="prettyprint">
<code>
$ git config --global user.name tuhaihe #该昵称显示在提交时使用
$ git config –-global user.email zhsan@gmail.com #该邮箱提交时使用
</code>
</pre>

   在上述设置完毕后，可运行下面命令查看自己的设置：

   <pre class="prettyprint">
<code>
$ git config user.name
$ git config user.email
</code>
</pre>

2. 创建仓库(以 Github 为例)

   + 在 Github 创建账号后，点击 [New Repository](https://github.com/new)，填写与本仓库相关的信息，如仓库名称、描述、是否公开。设置完毕后，点击“Create repository”即可创建新仓库。如，建立 test。
   + 仓库创建完毕，我们开始创建 README 文件，这个是对仓库的详细介绍，或者写些你认为重要的描述。

   <pre class="prettyprint">
<code>
$ mkdir ~/test #本地创建 test 文件夹
$ cd test/
$ git init #初始化 Git 仓库
$ touch README #创建README，但该文件尚未添加到版本库
</code>
</pre>

3. 提交文件到版本库

   <pre class="prettyprint">
<code>
$ git add README #将创建的 README 文件加入到版本库
$ git commit -m "commit README" #将文件提交到版本库
$ git log #查看提交日志
</code>
</pre>

4. 推送到 Github 远程仓库

   上述一系列操作，我们只是在本地建立了一个 Git 版本库，我们还需要将其推送到远程服务器(Github 仓库)。完成下述操作后，我们就可以在 Github 页面上看到我们提交的文件了。

   <pre class="prettyprint">
<code>
$ git remote add origin https://github.com/tuhaihe/test.git
$ git push origin master #推送到Github test仓库主枝，一般默认为 master
</code>
</pre>

5. 更多操作

   + 查看修改后的文件与版本库中的文件差异

   <pre class="prettyprint">
<code>
   $ git diff
</code>
</pre>

   + 查看状态

   <pre class="prettyprint">
<code>
   $ git status
</code>
</pre>
       
6. 需要注意的几个问题
   
   + 使用 `rm ~/file.txt` 删除了本地仓库中的文件，但在远程仓库中仍旧存在。
       解释：使用 rm 只是删除了本地文件，并没有将 file.txt 从版本库中删除，可以使用 git rm file.txt 将该文件从版本库中删除。
   + 使用 `git clone` 克隆的仓库无法提交更改。
       解释：git 支持 SSH 协议、HTTP 协议、Git 协议进行数据传输。SSH 协议支持读写操作，通过 HTTP 和 Git 协议克隆下来的仓库仅只读(如果要支持写，需要进行设置)，建议使用 SSH 协议进行克隆。
   + Git 版本控制三部曲：“git add-->git commit-->git push”。

## 更多资料

+ 《Git 权威指南》，蒋鑫著
+ [《Pro Git》中文版](http://git-scm.com/book/zh)
+ [Git - 简易指南](http://rogerdudler.github.io/git-guide/index.zh.html)：入门教程
+ [图解 Git](http://marklodato.github.io/visual-git-guide/index-zh-cn.html)
+ [Git Reference](http://gitref.org/index.html)

