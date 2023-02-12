am4core.useTheme(am4themes_animated);

// Create chart instance
const chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = [{
  "date": new Date(2022, 0, 1),
  "value": 10,
  
}, {
  "date": new Date(2022, 1, 1),
  "value": 15
}, {
  "date": new Date(2022, 2, 1),
  "value": 12
}, {
  "date": new Date(2022, 3, 1),
  "value": 8
}, {
  "date": new Date(2022, 4, 1),
  "value": 18
}, {
  "date": new Date(2022, 5, 1),
  "value": 15
}, {
  "date": new Date(2022, 6, 1),
  "value": 12
}];

// Create axes
const dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.grid.template.location = 0;
dateAxis.renderer.minGridDistance = 30;

const valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
function createSeries(field, name) {
  const series = chart.series.push(new am4charts.LineSeries());
  series.dataFields.valueY = field;
  series.dataFields.dateX = "date";
  series.name = name;
  series.tooltipText = "{dateX}: [b]{valueY}[/]";
  series.strokeWidth = 2;
  
  series.smoothing = "monotoneX";
  
  const bullet = series.bullets.push(new am4charts.CircleBullet());
  bullet.circle.stroke = am4core.color("#fff");
  bullet.circle.strokeWidth = 2;
  
  return series;
}

createSeries("value", "Clientes Agregados");

chart.legend = new am4charts.Legend();
chart.cursor = new am4charts.XYCursor();