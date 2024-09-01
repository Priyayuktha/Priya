const spanYear = document.querySelector('#full-year')
const yearSpan = new Date().getFullYear()
spanYear.textContent = yearSpan
let welcome;  
    let date = new Date();  
    let hour = date.getHours();  
    let minute = date.getMinutes();  
    let second = date.getSeconds();  
    if (minute < 10) {  
      minute = "0" + minute;  
    }  
    if (second < 10) {  
      second = "0" + second;  
    }  
    if (hour < 12) {  
      welcome = "morning";  
    } else if (hour < 17) {  
      welcome = "afternoon";  
    } else {  
      welcome = "evening";  
    } 

function display(val){
  if(event.key === 'Enter'){
		if((val.value).length > 0){
			  console.log(val.value)
    	customAlert(`searching for: "${val.value}"`, 3500)
		}else{
			customWarn('Type something',1500)
		}
  }
}


$(document).ready(function(){
	const body = document.querySelector('body');
	const toggled = document.getElementById('toggle');
	const media = window.matchMedia("(min-width:700px)")

toggled.onclick = function(){
		body.classList.toggle('light');
	toggled.classList.toggle('active')
}
	if(media.matches){
		console.log(true)
		$('#dashboard').mouseenter(function(){
		this.innerHTML = `good
    ${welcome}`;
	});
	$('#dashboard').mouseleave(function(){
		this.innerHTML = "DASHBOARD";
	});
	$('#kleenpulse').mouseenter(function(){
		this.innerHTML = "welcome";
	});
	$('#kleenpulse').mouseleave(function(){
		this.innerHTML = "LiquidTime";
	});
	}else{
		console.log(false)
	}



})

function customAlert(msg, duration) {
	var styler = document.createElement("div");
	styler.className = 'dis-wrap'

	styler.innerHTML = "<h1 class='display'>" + msg + "</h1>";
	setTimeout(function () {
		styler.parentNode.removeChild(styler);
	}, duration);
	document.body.appendChild(styler);
}

function customWarn(msg, duration) {
	var styler = document.createElement("div");
	styler.className = 'dis-warn'

	styler.innerHTML = "<h1 class='display'>" + msg + "</h1>";
	setTimeout(function () {
		styler.parentNode.removeChild(styler);
	}, duration);
	document.body.appendChild(styler);
}
// Sample data for the bar chart
const data = [
  { label: 'January', value: 30 },
  { label: 'February', value: 50 },
  { label: 'March', value: 70 },
  { label: 'April', value: 45 },
  { label: 'May', value: 65 }
];

// Function to create the bar chart
function createBarChart(data) {
  const barChart = document.getElementById('barChart');
  
  // Clear any existing content
  barChart.innerHTML = '';

  // Create bars for each data point
  data.forEach(item => {
    const bar = document.createElement('div');
    bar.classList.add('bar');
    bar.style.height = `${item.value}px`;
    bar.innerText = item.label;
    barChart.appendChild(bar);
  });
}

// Call the function to create the bar chart with sample data
createBarChart(data);


    