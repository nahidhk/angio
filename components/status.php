<div class="form">
    <blockquote>
        <h1>Total User Joid and Status</h1>
    </blockquote>
<div class="container">
    <svg id="pie-chart" width="800" height="400"></svg>
    <div id="legend"></div>
</div>
</div>


<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total_rows FROM members";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

} 
$conn->close();
?>


<script>
    const data = [
    { team: 'update to addd', goals: 5, color: '#1f77b4' },
    { team: 'Total Member', goals: <?php echo $row['total_rows'] ?>, color: '#ff7f0e' }
];

const width = 800;
const height = 400;
const radius = Math.min(width, height) / 2 - 40;

const svg = d3.select("#pie-chart")
    .attr("width", width)
    .attr("height", height)
  .append("g")
    .attr("transform", `translate(${width / 2},${height / 2})`);

const pie = d3.pie()
    .value(d => d.goals)
    .sort(null);

const arc = d3.arc()
    .innerRadius(0)
    .outerRadius(radius);

let arcs = svg.selectAll(".arc")
    .data(pie(data))
    .enter().append("g")
      .attr("class", "arc");

arcs.append("path")
    .attr("class", "slice")
    .attr("d", arc)
    .attr("fill", d => d.data.color)
    .on("mouseover", function(event, d) {
        d3.select(this)
            .transition()
            .duration(200)
            .attr("d", d3.arc().innerRadius(0).outerRadius(radius + 10))
            .classed("hover-slice", true);
    })
    .on("mouseout", function(event, d) {
        d3.select(this)
            .transition()
            .duration(200)
            .attr("d", arc)
            .classed("hover-slice", false);
    });

arcs.append("text")
    .attr("transform", d => `translate(${arc.centroid(d)})`)
    .attr("dy", "0.35em")
    .style("text-anchor", "middle")
    .text(d => d.data.goals);

const legend = d3.select("#legend")
    .append("div")
    .attr("class", "legend")
    .style("display", "flex")
    .style("justify-content", "center")
    .style("flex-wrap", "wrap");

const legendItems = legend.selectAll(".legend-item")
    .data(data)
    .enter().append("div")
      .attr("class", "legend-item")
      .style("margin-right", "10px")
      .style("display", "flex")
      .style("align-items", "center")
      .on("click", function(event, d) {
        d.hidden = !d.hidden;
        d3.select(this).classed("strikethrough", d.hidden);
        updateChart();
      });

legendItems.append("div")
    .style("width", "18px")
    .style("height", "18px")
    .style("background-color", d => d.color);

legendItems.append("span")
    .style("margin-left", "5px")
    .text(d => d.team);

function updateChart() {
    const filteredData = data.filter(d => !d.hidden);
    const arcs = svg.selectAll(".arc")
        .data(pie(filteredData));

    arcs.exit().remove();

    const newArcs = arcs.enter().append("g")
        .attr("class", "arc");

    newArcs.append("path")
        .attr("class", "slice")
        .attr("d", arc)
        .attr("fill", d => d.data.color)
        .on("mouseover", function(event, d) {
            d3.select(this)
                .transition()
                .duration(200)
                .attr("d", d3.arc().innerRadius(0).outerRadius(radius + 10))
                .classed("hover-slice", true);
        })
        .on("mouseout", function(event, d) {
            d3.select(this)
                .transition()
                .duration(200)
                .attr("d", arc)
                .classed("hover-slice", false);
        });

    newArcs.append("text")
        .attr("transform", d => `translate(${arc.centroid(d)})`)
        .attr("dy", "0.35em")
        .style("text-anchor", "middle")
        .text(d => d.data.goals);

    arcs.select(".slice")
        .transition()
        .duration(750)
        .attr("d", arc);

    arcs.select("text")
        .transition()
        .duration(750)
        .attr("transform", d => `translate(${arc.centroid(d)})`)
        .text(d => d.data.goals);
}

</script>