var container = document.getElementById("array");

// Function to generate the array of blocks
function generatearray() {

    for (var i = 0; i < 10; i++) {
        // Return a arrayValue from 1 to 100 (both inclusive)
        var arrayValue = Math.ceil(Math.random() * 100);

        // Creating element div
        var arrayElement = document.createElement("div");

        // Adding class 'block' to div
        arrayElement.classList.add("block");

        // Adding style to div
        arrayElement.style.height = `${arrayValue * 2}px`;
        //spacing between elements
        arrayElement.style.transform = `translate(${i * 30}px)`;

        // Creating label element for displaying
        // size of particular block
        var array_ele_label = document.createElement("label");
        array_ele_label.classList.add("block_id");
        array_ele_label.innerText = arrayValue;

        // Appending created elements to index.html
        arrayElement.appendChild(array_ele_label);
        container.appendChild(arrayElement);
    }
}

// Promise to swap two blocks
function swap(element1, element2) {
    return new Promise((resolve) => {

        // For exchanging styles of two blocks
        var temp = element1.style.transform;
        element1.style.transform = element2.style.transform;
        element2.style.transform = temp;

        window.requestAnimationFrame(function() {

            // For waiting for .25 sec
            setTimeout(() => { container.insertBefore(element2, element1); resolve(); }, 500);
        });
    });
}

// Asynchronous BubbleSort function
async function BubbleSort(delay = 0) {
    var blocks = document.querySelectorAll(".block");

    // BubbleSort Algorithm
    for (var i = 0; i < blocks.length; i += 1) {
        for (var j = 0; j < blocks.length - i - 1; j += 1) {

            // To change background-color of the
            // blocks to be compared
            blocks[j].style.backgroundColor = "blue";
            blocks[j + 1].style.backgroundColor = "red";

            // To wait for .1 sec
            await new Promise((resolve) => setTimeout(() => {resolve();}, delay));

            console.log("run");
            var value1 = Number(blocks[j].childNodes[0].innerHTML);
            var value2 = Number(blocks[j + 1]
                .childNodes[0].innerHTML);

            // To compare value of two blocks
            if (value1 > value2) {
                await swap(blocks[j], blocks[j + 1]);
                blocks = document.querySelectorAll(".block");
            }

            // Changing the color to the previous one
            blocks[j].style.backgroundColor = "#504848";
            blocks[j + 1].style.backgroundColor = "#504848";
        }

        //changing the color of greatest element
        //found in the above traversal
        blocks[blocks.length - i - 1].style.backgroundColor = "#00ff00\n";
    }
}

// Calling generatearray function
generatearray();

// Calling BubbleSort function
BubbleSort();