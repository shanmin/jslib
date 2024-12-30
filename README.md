# 前言
JSLib是我们根据以往的开发工作，总结出来的一套JavaScript工具集。本意是规范内部开发接口，后来觉得这个项目可以单独出来尝试进行一些共享或开源的工作。所以我们正在重新整理JSLib代码，并逐步释放一些相对通用的功能，并会先把相应的调用方式、接口、示例等共享出来，供大家参考、学习使用。

JSLib的基本架构和使用方式类似JQuery，可以简单的理解为JSLib的基础是一个简版的JQuery。但也不要过于简单的理解成就是一个简版JQuery，因为我们后面会慢慢放出一些相对大一些的应用扩展，例如刚开发的tableCells，以及未来加入的tree、ctree、inputSelect、ajax、post等多个插件。

因为在调用JSLib时，默认使用$js进行调用，所以我们内部也把JSLib称为$js。也就是说，在本项目内JSLib与$js两个名称都是指本项目的JSLib库。

如果在学习过程中遇到任何问题或有什么想法，请发到 https://github.com/shanmin/jslib/issues 进行交流。如果提交issue不方便，也可以直接给我们发送邮件进行交流 Email: 0123@163.com 。

查看文档请前往： https://shanmin.github.io/jslib/

# 扩展功能
## 同步加载js文件
使用$js.loadjs()方法可以实现js文件的同步加载。
## 四舍六入数字修约
使用$js.gb8170round()方法可以GB/T 8170国标的数字修约标准，俗称：四舍六进五成双，奇进偶不进。
## 单元格选择
使用$js().tableCells()方法可以实现多单元格区域选择，以及单元格内容复制、粘贴功能。

# 引用文件
在使用$js时，一定要引用dist/jslib.min.js文件。

HTML引用示例
```
<script src="jslib.min.js"></script>
```
jslib.min.js文件的存放位置不做任何限定，可根据项目自身的需要把dist目录下jslib.min.js文件进行任意存放。

# 调用示例
HTML
```
<script src="jslib.min.js"></script>
<script>
	let js=$js('div');
</script>
```
JavaScript链式调用示例
```
$js('div').find('.a1').html('<div>abc</div>');
```

# 发布说明
实际使用时，仅需要部署dist/jslib.min.js文件即可。本项目中的其他文件仅做为JSLib文档及示例使用。