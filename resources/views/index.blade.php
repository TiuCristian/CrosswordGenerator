{{-- <!DOCTYPE html>
<html>
<head>
    <title>Crossword Entries</title>
</head>
<body>
    <h1>Crossword Entries</h1>
    <table>
        <thead>
            <tr>
                <th>Answer</th>
                <th>Clue</th>
                <th>Length</th>
                <th>Date</th>
                <th>Direction</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entries as $entry)
                <tr>
                    <td>{{ $entry->answer }}</td>
                    <td>{{ $entry->clue }}</td>
                    <td>{{ $entry->length }}</td>
                    <td>{{ $entry->date }}</td>
                    <td>{{ $entry->direction }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crossword Puzzle</title>
<style>
  /* Your CSS styles here */
  .crossword-grid {
    display: grid;
    grid-template-columns: repeat(15, 40px); /* Adjust the number of columns */
    grid-gap: 1px;
  }
  .cell {
    width: 40px;
    height: 40px;
    border: 1px solid #ccc;
    text-align: center;
    line-height: 40px;
    font-size: 18px;
    cursor: pointer;
  }
</style>
</head>
<body>
<div class="crossword-grid" id="crossword-grid">
</div>
<script>
  const crosswordData = @json($entries);

  const crosswordGrid = document.getElementById("crossword-grid");

  crosswordData.forEach(entry => {
    const cell = document.createElement("div");
    cell.classList.add("cell");
    cell.dataset.row = entry.row;
    cell.dataset.col = entry.col;
    cell.dataset.isAcross = entry.direction === 'across';
    cell.textContent = entry.answer;

    cell.addEventListener("click", () => {
      // Display the clue or handle user input here
      const clue = entry.clue;
      console.log(clue);
    });

    crosswordGrid.appendChild(cell);
  });
</script>
</body>
</html>

