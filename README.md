## Structured Content Plugin Enhancer

Contributors: gulariav <br/>
Version: 1.0.3 <br/>
Tags: structured-content, collapsible-div<br/>
Requires at least: 3.5<br/>
Tested up to: 5.0.3<br/>
License: GPL v2 or later<br/>


### Description
This plugin is an extension of "Structured Content (JSON-LD) #wpsc" to change its layout to Collapsable section by adding this css class to it "collapsible-faq". Also provide options to make any div collapsible. 

https://wordpress.org/plugins/structured-content/


### Usage

**How to make structured content output collapsible** 

To make any structured content output collapsible, add this class "collapsible-faq". See example below:



<pre>
[sc_fs_faq sc_id="fs_faqa9dmd5mzj" html="true" headline="h2" img="" question="Example Heading of FAQ" img_alt="" css_class="collapsible-faq" ]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in risus sed erat malesuada aliquet vel vel lorem. Etiam eget vehicula nisl, at imperdiet mauris. Suspendisse aliquet dictum neque id condimentum.[/sc_fs_faq]
</pre>


**How to make a div collapsible**

To make any div collapsible, add elements in this format.

```html
<div class="faq-btn">Title</div>
<div class="faq-data">Description</div>
```



### Changelog
--------

##### 1.0.3
Added Support for fontawesome 4.x<br/>
Readme file update

##### 1.0.2
Moved script to load in footer<br/>
Readme file update

##### 1.0.1
Update plugin URI in plugin header<br/>
Readme file update

##### 1.0.0
Initial Release<br/>
