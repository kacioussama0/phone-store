const fetchGoogleReviews = async () => {
  const placeId = "ChIJozjZvkhljEcRVJo712JZh1c";
  const apiKey = "AIzaSyAI3wn_cQVRpuMO8PjtmbwrRnhqzDPl1SU";
  const url = `https://maps.googleapis.com/maps/api/place/details/json?placeid=${placeId}&fields=reviews&key=${apiKey}`;

  try {
    const response = await fetch(url);
    if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
    const data = await response.json();

    if (data.status === "OK") {
      const reviews = data.result.reviews;
      let reviewsHTML = "";

      reviews.forEach((review) => {
        reviewsHTML += `<div class="review">
                          <h3>${review.author_name}</h3>
                          <p>${review.text}</p>
                          <p>Rating: ${review.rating}</p>
                        </div>`;
      });

      document.getElementById("google-reviews").innerHTML = reviewsHTML;
    } else {
      console.error("Error fetching reviews:", data.status);
    }
  } catch (error) {
    console.error("Fetch error:", error);
  }
};

// Implement rate limiting by adding a delay between requests
const delay = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

const fetchReviewsWithRateLimit = async () => {
  await delay(1000); // 1-second delay
  await fetchGoogleReviews();
};

window.addEventListener("load", fetchReviewsWithRateLimit);
