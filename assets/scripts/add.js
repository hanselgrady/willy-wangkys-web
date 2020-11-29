function insertRow() {
    document.getElementById("insert-row").innerHTML += 
    `
    <br>
    <div class = "content-label">
        <label for="recipe">Ingredients Name</label><br><br>
    </div>
    <input class = "name-box" type="text" name="ingredientsname" required><br><br>
    <div class = "content-label">
        <label for="amount-ingredients">Ingredients Amount</label><br><br>
    </div>
    <input class="amount-box" type="number" name="ingredientsamount" required min ="0"><br>
    `
}