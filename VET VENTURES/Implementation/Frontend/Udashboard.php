<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Udashboard.css">
    <script src="https://d3js.org/d3.v6.min.js"></script>
<title>Udashboard</title>
    <style>
body {
	 background-color: #f7f4e9;
	 font-family: sans-serif;
}
 section {
	 margin-top: 2rem;
	 width: 100%;
}
 section #chart-wrap {
	 display: flex;
	 flex-direction: row;
	 height: auto;
	 justify-content: center;
	 margin: auto;
	 max-width: 500px;
	 position: relative;
	 width: 100%;
}
 section #chart-wrap .chart-tooltip {
	 margin-left: 15px;
	 position: absolute;
	 z-index: 10;
}
 section #chart-wrap .chart-tooltip .chart-tooltip-wrap {
	 background-color: #181818;
	 border-radius: 10px;
	 box-shadow: 2px 2px 5px rgba(0, 0, 0, .3);
	 display: block;
	 padding: 0.875rem;
}
 section #chart-wrap .chart-tooltip .chart-tooltip-wrap p {
	 color: #fff;
	 font-size: 0.875rem;
	 line-height: 1.75;
	 margin: 0;
}
 @media (max-width: 479px) {
	 section #chart-wrap {
		 flex-direction: column;
	}
}
 section #chart-wrap svg {
	 margin: auto;
}
 section #chart-wrap svg .text {
	 fill: #fff;
	 font-size: 0.875rem;
	 text-anchor: middle;
}
 section #chart-wrap .legend {
	 display: flex;
	 flex-direction: column;
	 gap: 8px;
	 justify-content: center;
	 margin: 2rem auto;
}
 @media (max-width: 479px) {
	 section #chart-wrap .legend {
		 flex-direction: row;
		 flex-wrap: wrap;
	}
}
 section #chart-wrap .legend .legend-group {
	 align-items: center;
	 display: flex;
	 flex: 1;
	 flex-direction: row;
	 gap: 8px;
	 justify-content: flex-start;
}
 @media (max-width: 479px) {
	 section #chart-wrap .legend .legend-group {
		 flex-basis: 100px;
	}
}
 section #chart-wrap .legend .legend-group .legend-box {
	 height: 20px;
	 margin: 0;
	 width: 20px;
}
 section #chart-wrap .legend .legend-group .legend-label {
	 margin: 0;
}
 
 </style>

</head>
<body>
<input type="checkbox" id="nav-toggle">
    
    <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span id="kleenpulse">VET VENTURES</span></h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="complaint.php" class="active"><span class="fa-solid fa-comment"></span>
                            <span>POST COMPLAINT</span>
                        </a>
                    </li>
                    <li>
                        <a href="complaintstatus.php"><span class="fa-solid fa-person"></span>
                            <span>COMPLAINT STATUS</span>
                        </a>
                    </li>
                    <li>
                        <a href="viewdoctor.php"><span class="fa-solid fa-user-doctor"></span>
                            <span>VIEW DOCTOR</span>
                        </a>
                    </li>
                    <li>
                        <a href="feedback.php"><span class="fa-regular fa-message"></span>
                            <span>POST FEEDBACK</span>
                        </a>
                    </li>
                    <li>
                        <a href="pay.php"><span class="fa-regular fa-credit-card"></span>
                            <span>MAKE PAYMENT</span>
                        </a>
                    </li>
                    <li>
                        <a href="myprofile.php"><span class="fa fa-user-circle"></span>
                            <span>MY PROFILE</span>
                        </a>
                    </li>
                 </ul>
            </div>
    </div>
    <div class="main-wrapper">
    <div class="main-content">
            <header>
                <h2 class="heading" id="dashboard">
                    USER DASHBOARD
                    </h2>
                    <label for="nav-toggle">
                    </label>
                  
               
               



                <div class="user-wrapper">
                    <img src="IMAGE LOGO/Logo.jpg">
                    <div>
                        <h4>VET VENTURES</h4>
                        </div>
                </div>
            </header>
            <main>
                <!-- <div id="pop-wrap">
                    <h1 class="pop-up">Light Mode Activated</h1>
                </div> -->
                <!-- <div class="switch" id="switch">
                    <div id="toggle">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <i class="indicator"></i>
    
                    </div>
                </div> -->
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1 id="customer"></h1>
                            <span>DOGS</span>
                        </div>
                        <div>
                            <span class="fa-solid fa-dog"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="project"></h1>
                            <span>CATS</span>
                        </div>
                        <div>
                            <span class="fa-solid fa-cat"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="order"></h1>
                            <span>CATTLES</span>
                        </div>
                        <div>
                            <span class="fa-solid fa-cow"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1><sup></sup>
                                <p id="income"><b></b></p>
                            </h1>
                            <span>BIRDS</span>
                        </div>
                        <div>
                            <span <i class="fa-solid fa-kiwi-bird"></span>
                        </div>
                    </div>
                </div>
                <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="heading">VISITED DOCTORS</h3>
                                </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <td>DOCTOR NAME</td>
                                                <td>SPECIALIZATION</td>
                                                <td>AVAILABILITY</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>DR.STANFORD</td>
                                                <td>VETERNARY SURGEON</td>
                                                <td>
                                                    <span class="status pink"></span>UNAVAILABLE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>DR.ALWIN</td>
                                                <td>VETERNARY CARDIOLOGY</td>
                                                <td>
                                                    <span class="status orange"></span>AVAILABLE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>DR.ARUN</td>
                                                <td>VETERNARY ONCOLOGY</td>
                                                <td>
                                                    <span class="status pink"></span>UNAVAILABLE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>DR.ANJALI</td>
                                                <td>VETERNARY DERMATOLOGY</td>
                                                <td>
                                                    <span class="status orange"></span>AVAILABLE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>DE.VENKATESH</td>
                                                <td>VETERNARY NEUROLOGY</td>
                                                <td>
                                                    <span class="status pink"></span>UNAVAILABLE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>DR.SAPNA</td>
                                                <td>VETERNARY RADIOLOGY</td>
                                                <td>
                                                    <span class="status orange"></span>AVAILABLE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>DR.CHANDRASHEKHAR</td>
                                                <td>VETERNARY HAEMOTOLOGY</td>
                                                <td>
                                                    <span class="status orange"></span>AVAILABLE
                                                </td>
                                            </tr>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="heading">PETS ACCURACY</h3>
                                </div>
    
                            <div class="card-body">
                                <div class="customer">
                                    <div class="info">
                                        
                                        <div>
                                            <h4>
                                                CATTLES</h4>
                                            <small>38</small>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="customer">
                                    <div class="info">
                                        
                                        <div>
                                            <h4>DOGS</h4>
                                            <small>30</small>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="customer">
                                    <div class="info">
                                        
                                        <div>
                                            <h4>BIRDS</h4>
                                            <small>19</small>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="customer">
                                    <div class="info">
                                        
                                        <div>
                                            <h4>RABBITS</h4>
                                            <small>9</small>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="customer">
                                    <div class="info">
                                        
                                        <div>
                                            <h4>CATS</h4>
                                            <small>4</small>
                                        </div>
                                    </div>
                                </div>
    
                                
                    </div>
                </div>
    
            </main>
            <section>
 <div id="chart-wrap"></div>
</section>
    </div>
    </div>
    </div>
    <video class="video-1" src="https://vxrcel-studio.vercel.app/abstract.mp4" loop muted autoplay></video>
    <video class="video-2" src="https://vxrcel-studio.vercel.app/darkwave.mp4" loop muted
        autoplay></video>
        <!-- <div class="dis-wrap">
            <p class="display">[Some text here for refrence]</p>
        </div> -->
        <script>
 const wrap = d3.select('#chart-wrap');
let wrapWidth = parseInt(wrap.style('width'));
let wrapHeight;
const src = 'Udashboard.csv';
const colorsArray = ['#5626C4', '#E60576', '#2CCCC3', '#FACD3D', '#FF5100', '#181818', ];
const formatPerc = d3.format(".0%");
let width;
let height;
let pieRadius;
let pie;
let total;
let arc;

// Tooltip functions
const tooltipMouseMove = (d) => {
    const xArc = arc.centroid(d)[0] + (width / 2);
    const yArc = arc.centroid(d)[1] + (height / 2);
       
    tooltipChart
      .html(() => {
        return (
          `<div class="chart-tooltip-wrap">
            <p>Percentage: ${formatPerc(d.value / total)}</p>
            <p>Value: ${d.value}</p>
           </div>
          `
         );
      })
      .style('visibility', 'visible')
      .style('top', 0)
      .style('left', 0)
      .style("transform", `translate(${xArc + 80}px, ${yArc - 25}px)`);
}

const tooltipMouseOut = () => {
  tooltipChart
    .style('visibility', 'hidden')
}

// Pie
if (wrapWidth <= 479) {
  width = 250;
  height = 250;
} else {
  width = 300;
  height = 300;
}

pieRadius = Math.min(width / 2, height / 2);

pie = d3.pie()
  .value((d) => { return d.value; });

arc = d3.arc()
  .outerRadius(pieRadius)
  .innerRadius(0);

// Animation function
const animate = (f) => {
  f.innerRadius = 0;
  let interp = d3.interpolate({ startAngle: 0, endAngle: 0 }, f);

  return (t) => { return arc(interp(t)); }
}

// SVG
const svg = wrap.append('svg')
  .attr('width', width)
  .attr('height', height);

// SVG aria tags
svg.append('title')
  .attr('id','chart-title')
  .html('Pie chart');

svg.append('desc')
  .attr('id','chart-desc')
  .html('Displays arbitrary values for items.');

svg.attr('aria-labelledby','chart-title chart-desc');

tooltipChart = wrap.append('div')
    .attr('class','chart-tooltip')
    .style('visibility', 'hidden');

const g = svg.append('g')
  .attr('width', width)
  .attr('height', height)
  .style('transform', `translate(${width / 2}px, ${height / 2}px)`);

// Legend wrap
const legend = wrap.append('div')
  .attr('class', 'legend');

// Create chart
async function createPie() {
  const data = await d3.csv(src); 
  data.sort((a, b) => {
    return d3.descending(+a.value, +b.value);
  });
  total = d3.sum(data, (d) => { return d.value; });
  
  // Pie slices
  const slices = g.selectAll('.arc')
    .data(pie(data))
    .enter()
    .append('path')
    .attr('class', 'slices')
    .attr('fill', (d,i) => {
        return colorsArray[i];
    })
    .attr('aria-label', d => {
      return `Pie slice for ${d.name}`
    })
    .on('mouseover', (event, d) => {
      const f = d;
      tooltipMouseMove(f);
    })
    .on('mouseout', () => {
      tooltipMouseOut();
    })
    .transition()
    .duration(1000)
    .delay(100)
    .attrTween('d', animate);
  
  // Text values in slices
  const text = g.selectAll('.text')
    .data(pie(data))
    .enter()
    .append('text')
    .attr('transform', (d) => { return `translate(${ arc.centroid(d) })`; })
    .attr('class', 'text')
    .style('opacity', '0')
    .text((d,i) => { return formatPerc(d.value / total) })
    .transition()
    .duration(300)
    .delay(700)
    .style('opacity', '1');
  
  // Legend
  legend.selectAll('div')
    .data(data)
    .enter()
    .append('div')
    .attr('class', 'legend-group')
    .html((d, i) => {
      return(`
        <div class="legend-box" style="background-color: ${colorsArray[i]};"></div>
        <p class="legend-label">${d.name}</p>
      `)
    });
}
createPie();

const resize = () => {
    let wrapWidth = parseInt(wrap.style('width'));
    if (wrapWidth <= 479) {
      width = 250;
      height = 250;
    } else {
      width = 300;
      height = 300;
    }
  
    svg.attr('width', width)
      .attr('height', height);

    g.attr('width', width)
      .attr('height', height)
      .style('transform', `translate(${width / 2}px, ${height / 2}px)`);
  
    pieRadius = Math.min(width / 2, height / 2);

    arc = d3.arc()
      .outerRadius(pieRadius)
      .innerRadius(0);
  
    d3.selectAll('.slices')
      .attr('d', arc)
      .on('mouseover', (event, d) => {
        const f = d;
        tooltipMouseMove(f);
      })
      .on('mouseout', () => {
        tooltipMouseOut();
      })
  
    d3.selectAll('.text')
      .attr('transform', (d) => { return `translate(${arc.centroid(d)})`; })
}

d3.select(window).on('resize', resize);
</script>

<script src="js/Udashboard.js"></script>
</html>

    
