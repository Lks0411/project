var headerTemplate = document.getElementById("header-template").innerHTML;

// 使用Handlebars编译模板
var compiledTemplate = Handlebars.compile(headerTemplate);

// 渲染头部模板，并将其插入到占位符元素中
var headerPlaceholder = document.getElementById("header-placeholder");
headerPlaceholder.innerHTML = compiledTemplate({ pageTitle: "页面标题" });