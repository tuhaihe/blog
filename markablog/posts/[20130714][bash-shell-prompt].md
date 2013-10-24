定制 Shell 提示符 {{meta}}
------------------------

## Shell 类型标识

  在打开的终端等待输入命令时，往往显示部分信息，如显示当前日期、符号“>”、“$” 等等，这就是命令提示符。

  我们可能会注意到，在使用不同的用户标识、不同的 Shell 类型时，会出现诸如 $、#、% 等提示符。默认情况下，它们都有标志意义的。通过下表，可以进行了解一下。

*标准 Shell 提示*
<table>
<tr><td>Shell提示</td><td>Shell类型</td></tr>
<tr><td>$</td><td>Bash</td></tr>
<tr><td>%</td><td>C-shell家族</td></tr>
<tr><td>%或></td><td>Tcsh</td></tr>
<tr><td>#</td><td>根用户，root身份</td></tr>
</table>

  当我们看到这些 Shell 提示符时，应该灵敏地感觉到自己处在什么 Shell 类型之中。尤其是出现“#”时，也应该意识到：我正在以 root 用户标识登陆，我的每一步操作都应该谨慎。
  
## 定制 Bash Shell 命令提示符

### 引子

   在多数 Linux 下，一般提供 Bash 作为默认 Shell。但不同的系统中，你会看到不同的命令提示符，如 Fedora 下：

   <pre class="prettyprint">
<code>
   [fedora@fedora ~]$ 
</code>
</pre>

   或者，它们默认提供的颜色也不一致。这就是我们要讨论的：如何去定制更加个性化的命令提示符。
   
### 环境变量 PS1

   Shell 命令提示符实际上由一个环境变量 PS1 来设置的，上面的例子 PS1 值为：

   <pre class="prettyprint">   
<code>
$ echo $PS1 #显示PS1变量值
   [\u@\h \W]\$
</code>
</pre>

   在 Shell 提示中，我们可以使用「环境变量」和「特殊码」来定制提示符。

*Shell 提示符号中有用的环境变量*

<table>
<tr><td>变量</td><td>含义</td></tr>
<tr><td>HOME</td><td>主文件夹目录</td></tr>
<tr><td>HOSTNAME</td><td>计算机名称</td></tr>
<tr><td>HOSTTYPE</td><td>主机类型（CPU架构）</td></tr>
<tr><td>LOGNAME</td><td>当前用户标识</td></tr>
<tr><td>PWD</td><td>当前工作目录</td></t>
<tr><td>RANDOM</td><td>0～32767之间的随机数</td></tr>
<tr><td>SECONDS</td><td>当前 Shell 运行时间（秒）</td></tr>
<tr><td>SHELL</td><td>登陆 Shell 的路径名</td></tr>
<tr><td>USER</td><td>当前用户标识</td></tr>
</table>

   当我们要在命令提示符中使用上述环境变量时，可以直接将其插入在命令提示符中，如：

   <pre class="prettyprint">
<code>
   export PS1="$USER >"
</code>
</pre>

   当然，上面的环境变量有限，提供的信息也没有足够的吸引力。Bash 还允许通过插入一些反斜杠转义的特殊字符来定制命令提示符（`man bash`）：

<table>
<tr><td>\d</td><td>日期，格式是 "星期 月份 日" (例如，"Tue May 26")</td></tr>
<tr><td>\h</td><td>主机名，第一个 `.' 之前的部分</td></tr>
<tr><td>\H</td><td>主机名</td></tr>
<tr><td>\n</td><td>换行</td></tr>
<tr><td>\r</td><td>回车</td></tr>
<tr><td>\t</td><td>显示当前时间，采用24小时制 HH:MM:SS 格式</td></tr>
<tr><td>\T</td><td>显示当前时间，采用12小时制的 HH:MM:SS 格式</td></tr>
<tr><td>\@</td><td>显示当前时间，采用12小时制「上午/下午」格式</td></tr>
<tr><td>\A</td><td>显示当前时间，采用24小时制「上午/下午」格式</td></tr>
<tr><td>\u</td><td>当前用户的用户名</td></tr>
<tr><td>\w</td><td>当前工作目录</td></tr>
<tr><td>\W</td><td>当前工作目录的基本部分</td></tr>
<tr><td>\!</td><td>此命令的历史编号</td></tr>
<tr><td>\#</td><td>此命令的命令编号</td></tr>
<tr><td>\$</td><td>如果有效 UID 是 0，就是 #, 其他情况下是 $</td></tr>
<tr><td>\\</td><td>一个反斜杠</td></tr>
<tr><td>\[</td><td>一个不可打印字符序列的开始，可以用于在提示符中嵌入终端控制序列</td></tr>
<tr><td>\]</td><td>一个不可打印字符序列的结束</td></tr>
</table>


结合上面提供的可用特殊字符，定制个性化的命令提示符并不困难了。可以结合前面的文章《Oh my zsh！》进行设置。

