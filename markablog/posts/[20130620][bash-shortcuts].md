终端快捷键，效率大提升 {{meta}}
---------------------------

## 引言
  
  大多数系统  Shell 默认使用 Bash。如果你是一个 Emacs 用户，不经意在 Bash 按下 C-a，发现竟然可以跳至命令行的开头，C-e 跳至命令行行尾，C-p/C-n 可以调出上一条/下一条历史命令……这些不是巧合。

  是的，Bash 支持命令行编辑，允许使用许多不同的按键控制命令行上输入的内容。尤其需要指出的是，Bash 支持 Vi/Emacs 命令查看、修改我们在命令行上输入的内容。不用惊奇，Shell 不允许它们同时生效，这样你就可以避免同时处于 Vi 和 Emacs 模式之中了。

  Shell 默认使用 Emacs 命令，称之为 Emacs 模式。当然，我们可以通过下面操作随意切换模式。

<code>
//Bash Shell
$ set -o vi #切换至 Vi 模式
$ set -o emacs #由 Vi 模式切回到 Emacs 模式

//Zsh
$ bindkey -v #设为 Vi 模式
$ bindkey -e #设为 Emacs 模式
</code>

  下面，我们重点介绍 Bash Emacs 模式下的快捷键。这里列举的操作快捷键与 Emacs 中的不尽相同。

## 编辑命令

<pre>
  C 代表 Ctrl，C-a 表示按住 Ctrl 键不放再按下 a
  M 为修饰键，一般为 Alt，M-f 表示按住 Alt 键不放再按下 f
</pre>
  
### 移动
<table>
<tr>
<td>C-a</td><td>跳至命令行开头</td>
</tr>
<tr>
<td>C-e</td><td>跳至命令行行尾</td>
</tr>
<tr>
<td>C-f</td><td>向前移动一个字符(chracter)</td>
</tr>
<tr>
<td>C-b</td><td>向后移动一个字符</td>
</tr>
<tr>
<td>M-f</td><td>向前移动一个单词(word)</td>
</tr>
<tr>
<td>M-b</td><td>向后移动一个单词</td>
</tr>
</table>

### 删除
<table>
<tr>
<td>C-k</td><td>删除当前光标位置到命令行行尾的全部字符（包括光标所在字符）</td>
</tr>
<tr>
<td>C-u</td><td>删除当前光标位置到命令行行首的全部字符（不包括光标所在字符）</td>
</tr>
<tr>
<td>C-w</td><td>删除光标前的一个单词</td>
</tr>
<tr>
<td>C-d</td><td>删除光标所在的字符</td>
</tr>
<tr>
<td>C-h</td><td>删除光标前的一个字符，同 Backspace 键<td></td>
</tr>
<tr>
<td>M-d</td><td>删除光标位置到光标所在单词末尾</td>
</tr>
<tr>
<td>C-y</td><td>粘贴刚删除的内容</td>
</tr>
<tr>
<td>C-t</td><td>交换光标所在字符与其前的字符</td>
</tr>
<tr>
<td>M-t</td><td>交换光标所在的单词与前面单词的位置</td>
</tr>
</table>

### 搜索
<table>
<tr>
<td>C-p</td><td>上一条命令</td>
</tr>
<tr>
<td>C-n</td><td>下一条命令</td>
</tr>
<tr>
<td>C-r</td><td>逆向搜索命令历史记录（按下 C-g 退出搜索）</td>
</tr>
<tr>
<td>C-s</td><td>（对 Zsh）正向搜索命令历史记录（按下 C-g 退出搜索），Bash 则锁住屏幕，按下 C-q 解锁屏幕</td>
</tr>
</table>

### 更多
<table>
<tr>
<td>C-m</td><td>相当于“回车键”</td>
</tr>
<tr>
<td>C-i</td><td>相当于 Tab</td>
</tr>
<tr>
<td>C-[</td><td>相当于 Esc</td>
</tr>
<tr>
<td>C-l</td><td>清屏</td>
</tr>
<tr>
<td>C-c</td><td>中断命令输入</td>
</tr>
<tr>
<td>C-d</td><td>退出 Shell</td>
</tr>
<tr>
<td>Shift+→/←</td><td>Konsole 中切换多标签页</td>
</tr>
<tr>
<td>Ctrl+PageDown/PageUp</td><td>Gnome Terminal 中切换多标签页</td>
</tr>
</table>

## 更多资料

+ [Bash Manual](https://www.gnu.org/software/bash/manual/bashref.html#Command-Line-Editing)
