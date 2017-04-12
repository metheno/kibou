# typecho-theme-kibou
v0.2.4

---

A minimal Typecho theme based on Bootstrap designed for a better reading experience.

Feel free to send [issues in GitHub](https://github.com/metheno/typecho-theme-kibou/issues).

You can also simply join the QQ group chat at 343313447.

**The theme is tested on Typecho 1.0**

## Acknowledgements

- [twbs/bootstrap](https://github.com/twbs/bootstrap)
- [jquery/jquery](https://github.com/jquery/jquery)
- [isagalaev/highlight.js](https://github.com/isagalaev/highlight.js)
- [DIYgod/ASpace](https://github.com/DIYgod/ASpace/)

## Screenshots

![Kibou Header](https://raw.githubusercontent.com/metheno/didactic-umbrella/master/typecho-theme-kibou/kibou-white.png)
![Kibou Comment Form](https://raw.githubusercontent.com/metheno/didactic-umbrella/master/typecho-theme-kibou/kibou-new-comment-form.png)
![Kibou Blogroll Page](https://raw.githubusercontent.com/metheno/didactic-umbrella/master/typecho-theme-kibou/kibou-blogroll.png)
![Kibou Frosted Glass](https://raw.githubusercontent.com/metheno/didactic-umbrella/master/typecho-theme-kibou/kibou-transparent.png)

## Features

- Based on Bootstrap
- Minimal (as in art, not in size) and simple
- Fully responsive, good for smartphones
- A frosted glass style designed for **Safari**\* (See below for details).
- Automatically highlight \<code\> tag
- A simple [tag cloud page](https://blog.metheno.net/archives.html)
- A simple [blogroll page](https://blog.metheno.net/py.html)
- DNS prefetch
- Switch to serif font for more comfortable reading in English
- MathJAX support
- Google Analysis support
- [NetEase Comments](https://gentie.163.com/) support
- Plugins: style optimization
- Copyright protection

### Coming up in future updates…

- **PJAX**
- **Extended Markdown syntax**

### Possible features in the future

- i18n support

### Blogroll

Currently, adding new blogroll link through markdown syntax is not supported. If you wish to add a new link, please use the following HTML format.

```html
<ul class="links">
  <li>
    <a href="//some.link" target="_blank">
      <img src="//path.to/avatar.png">
      <span>Your Friend's Name</span>
    </a>
  </li>
<ul>
```

### Frosted Glass Effect

The frosted glass effect can be enabled for Safari users only.

The effect was made compatible for **Chrome** and **Firefox** users by @moriW. I appreciate his work.

However, this effect is **no longer supported** by theme Kibou, due to many reports of glitches and malfunctions. This effect seems to cause some browsers, including Chrome and certain Chinese Browsers, to slow down and may even crash on certain PCs.

The effect is still available in the [frosted-glass branch](https://github.com/metheno/typecho-theme-kibou/tree/frosted-glass), but the theme is at an older version, and will not be supported in future releases.

### Plugin style optimization

The theme is now optimized for or compatible with the following plugins:

- [APlayer](https://github.com/DIYgod/APlayer/) support - style optimization
- [DPlayer](https://github.com/DIYgod/DPlayer/) support - style optimization
- [TePostView](https://lixianhua.com/typecho_viewsnum_plugin.html) support - add compatibility

## Known Issues

The following issues are known:

- Render with extended Markdown causes APlayer and DPlayer to work incorrectly.

The reason why above issues exist is because that I'm too young.

## Contribute

If you wish to contribute to this theme, please fork this repository and send a pull request after change.

### Contributors

- moriW: https://www.moridisa.cn

## Links

Demo: http://blog.metheno.net/

Author: https://www.metheno.net/

## License

The MIT License (MIT)

## Donations

<a href='https://pledgie.com/campaigns/33629'><img alt='Click here to lend your support to: typecho-theme-kibou and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/33629.png?skin_name=chrome' border='0' ></a>

Donate via WeChat.

![WeChat QR Code](https://raw.githubusercontent.com/metheno/didactic-umbrella/master/typecho-theme-kibou/WeChatPay.jpg)
