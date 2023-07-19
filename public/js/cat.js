// public/js/cat.js
async function getInitialCatPic() {
  try {
    const response = await fetch('https://api.thecatapi.com/v1/images/search', {});
    const data = await response.json();
    const catImgUrl = data[0].url;

    // Set the initial image source to the API's cat image
    document.getElementById('cat-image').setAttribute('src', catImgUrl);
  } catch (error) {
    console.error('Error fetching initial cat image:', error);
  }
  // Center the image on initial load
  const imageContainer = document.querySelector('.image-container');
  imageContainer.style.display = 'flex';
  imageContainer.style.justifyContent = 'center';
  imageContainer.style.alignItems = 'center';
}

// Fetch initial cat image on page load
getInitialCatPic();

// Function to get a new cat pic on button click
async function getCatPic() {
  try {
    const response = await fetch('https://api.thecatapi.com/v1/images/search', {});
    const data = await response.json();
    const catImgUrl = data[0].url;

    // Update the image source
    document.getElementById('cat-image').setAttribute('src', catImgUrl);
  } catch (error) {
    console.error('Error fetching cat image:', error);
  }
}

// Add event listener to the button
document.getElementById("cat-button").onclick = function() {
  getCatPic();
};
