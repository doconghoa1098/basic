function canBuyBeer(age, money) {
  return age >= 21 && money >= 20;
}

function shouldShowImage(itemIndex, article, showAllImage) {
  if (!article.imageUrl) {
    return false;
  }

  if (showAllImage) {
    return true;
  }

  if ([0, 1, 2].includes(itemIndex)) {
    return true;
  }
  return false;
}

function getArea(shape, width, height, radius) {
  switch (shape) {
    case "circle":
      return Math.PI * radius * radius;
    case "square":
      return width * width;
    case "rectangle":
      return width * height;
    default:
      console.log("default");
  }
}

// function greetings(timePhase) {
//     if (timePhase === "morning") {
//         console.log("Good Morning");
//     } else if (timePhase === "afternoon") {
//         console.log("Good Afternoon");
//     } else if (timePhase === "evening") {
//         console.log("Good Evening");
//     } else {
//         console.log("Good Night");
//     }
// }

function greetings(timePhase = "Night") {
  return console.log(`Good ${timePhase}`);
}

greetings("Afternoon");
greetings();
