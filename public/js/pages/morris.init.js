!function(e){"use strict";var a=function(){};a.prototype.createStackedChart=function(e,a,r,t,i,o){Morris.Bar({element:e,data:a,xkey:r,ykeys:t,stacked:!0,labels:i,hideHover:"auto",resize:!0,gridLineColor:"#eeeeee",barColors:o})},a.prototype.createAreaChart=function(e,a,r,t,i,o,c,n){Morris.Area({element:e,pointSize:0,lineWidth:0,data:t,xkey:i,ykeys:o,labels:c,hideHover:"auto",resize:!0,gridLineColor:"#eef0f2",lineColors:n})},a.prototype.createLineChart=function(e,a,r,t,i,o,c,n,y){Morris.Line({element:e,data:a,xkey:r,ykeys:t,labels:i,fillOpacity:o,pointFillColors:c,pointStrokeColors:n,behaveLikeLine:!0,gridLineColor:"#eef0f2",hideHover:"auto",lineWidth:"3px",pointSize:0,preUnits:"$",resize:!0,lineColors:y})},a.prototype.createBarChart=function(e,a,r,t,i,o){Morris.Bar({element:e,data:a,xkey:r,ykeys:t,labels:i,hideHover:"auto",resize:!0,gridLineColor:"#eeeeee",barSizeRatio:.4,xLabelAngle:35,barColors:o})},a.prototype.createAreaChartDotted=function(e,a,r,t,i,o,c,n,y,b){Morris.Area({element:e,pointSize:3,lineWidth:1,data:t,xkey:i,ykeys:o,labels:c,hideHover:"auto",pointFillColors:n,pointStrokeColors:y,resize:!0,smooth:!1,gridLineColor:"#eef0f2",lineColors:b})},a.prototype.createDonutChart=function(e,a,r){Morris.Donut({element:e,data:a,barSize:.2,resize:!0,colors:r})},a.prototype.init=function(){this.createStackedChart("morris-bar-stacked",[{y:"2005",a:45,b:180,c:100},{y:"2006",a:75,b:65,c:80},{y:"2007",a:100,b:90,c:56},{y:"2008",a:75,b:65,c:89},{y:"2009",a:100,b:90,c:120},{y:"2010",a:75,b:65,c:110},{y:"2011",a:50,b:40,c:85},{y:"2012",a:75,b:65,c:52},{y:"2013",a:50,b:40,c:77},{y:"2014",a:75,b:65,c:90},{y:"2015",a:100,b:90,c:130},{y:"2016",a:80,b:65,c:95}],"y",["a","b","c"],["Bitcoin","Ethereum","Litecoin"],["#4c463a","#4eb7eb","#e3eaef"]);this.createAreaChart("morris-area-example",0,0,[{y:"2009",a:10,b:20},{y:"2010",a:75,b:65},{y:"2011",a:50,b:40},{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:90,b:60}],"y",["a","b"],["Bitcoin","Ethereum"],["#4c463a","#e3eaef"]);this.createLineChart("morris-line-example",[{y:"2008",a:50,b:0},{y:"2009",a:75,b:50},{y:"2010",a:30,b:80},{y:"2011",a:50,b:50},{y:"2012",a:75,b:10},{y:"2013",a:50,b:40},{y:"2014",a:75,b:50},{y:"2015",a:100,b:70}],"y",["a","b"],["Bitcoin","Ethereum"],["0.1"],["#ffffff"],["#999999"],["#f1556c","#4eb7eb"]);this.createBarChart("morris-bar-example",[{y:"2009",a:100,b:90,c:40},{y:"2010",a:75,b:65,c:20},{y:"2011",a:50,b:40,c:50},{y:"2012",a:75,b:65,c:95},{y:"2013",a:50,b:40,c:22},{y:"2014",a:75,b:65,c:56},{y:"2015",a:100,b:90,c:60}],"y",["a","b","c"],["Bitcoin","Ethereum","Litecoin"],["#4c463a","#0acf97","#ebeff2"]);this.createAreaChartDotted("morris-area-with-dotted",0,0,[{y:"2009",a:10,b:20},{y:"2010",a:75,b:65},{y:"2011",a:50,b:40},{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:90,b:60}],"y",["a","b"],["Bitcoin","Litecoin"],["#ffffff"],["#999999"],["#4eb7eb","#e3eaef"]);this.createDonutChart("morris-donut-example",[{label:"Bitcoin",value:12},{label:"Ethereum",value:30},{label:"Litecoin",value:20}],["#4c463a","#0acf97","#ebeff2"])},e.MorrisCharts=new a,e.MorrisCharts.Constructor=a}(window.jQuery),function(e){"use strict";window.jQuery.MorrisCharts.init()}();