Ubuntu 13.04安装Linux Deepin特色软件 {{meta}}
-------------------------------------------

最新版本的 Linux Deepin 12.12 RC 已经将基础仓库升级到了 Ubuntu Raring，Linux Deepin 开发的特色软件，简单易用，其他发行版本的开发者应该尽量移植。因为 Linux Deepin 使用了 Ubuntu 的基础仓库，所以，Ubuntu 用户安装 Linux Deepin 软件相对容易一些。

下面以 Ubuntu 13.04 安装 Linux Deepin 特色软件为例。

1. 添加 Linux Deepin 升级源
   
   <pre class="prettyprint">
<code>
sudo gedit /etc/apt/sources.list #编辑升级列表
</code>
</pre>

   将下面两行内容添加到该文件末尾：

   <pre class="prettyprint">
<code>
deb http://packages.linuxdeepin.com/deepin raring main non-free universe
deb-src http://packages.linuxdeepin.com/deepin raring main non-free universe
</code>
</pre>

2. 添加 Linux Deepin 密钥文件

   + 导入密钥

   <pre class="prettyprint">
   <code>
wget http://packages.linuxdeepin.com/deepin/project/deepin-keyring.gpg
gpg --import deepin-keyring.gpg
</code>
</pre>

   + 列出密钥

   <pre class="prettyprint">
<code>
gpg --list-keys
</code>
</pre>

    你会看到输出的结果如下：

    <pre class="prettyprint">
<code>
    /home/test/.gnupg/pubring.gpg
    \-----------------------------
    pub   2048R/209088E7 2010-10-06
    uid                  Leng Ganghua (Hiweed) <hiweed@gmail.com>
    sub   2048R/4B46F33F 2010-10-06
</code>
</pre>

    + 将密钥导出到 apt-key
   
   <pre class="prettyprint">
   <code>
sudo gpg --export --armor 209088E7 | sudo apt-key add -
</code>
</pre>

3. 更新软件源列表

   <pre class="prettyprint">
<code>
sudo apt-get update
</code>
</pre>

4. 更多

   + 深度音乐：<code>sudo apt-get install python-deepin-gsettings deepin-music-player</code>
   + 深度软件中心：<code>sudo apt-get install deepin-software-center</code>
   + 深度桌面环境：<code>sudo apt-get install dde-meta-core#注销，选择从Deepin登录即可</code>
   + 小企鹅输入法与搜狗拼音：<code>sudo apt-get install ibus- fcitx fcitx-sogoupinyin #同时卸载 Ibus</code>


你可以通过这种方式来更多的安装 Linux Deepin 仓库里面的软件。当然，进入深度桌面环境后，你可能会发现系统设置里面的部分模块表现不如原生的表现良好。同理，Linux Mint 等类似系列发行版本也可以使用该方法。
  
## 参考

+ [Linux Deepin论坛：设置源时出现公钥问题的解决](http://www.linuxdeepin.com/forum/6/7996)
