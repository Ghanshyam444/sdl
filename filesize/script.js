document.getElementById("fileInput").addEventListener("change", function () {
  const file = this.files[0];

  if (file) {
    const fileSize = file.size;
    const fileSizeInKB = fileSize / 1024;
    const fileSizeInMB = fileSizeInKB / 1024;

    let resultText = "";

    if (fileSizeInMB >= 1) {
      resultText = `File size: ${fileSizeInMB.toFixed(2)} MB`;
    } else {
      resultText = `File size: ${fileSizeInKB.toFixed(2)} KB`;
    }

    document.getElementById("result").innerText = resultText;
  } else {
    document.getElementById("result").innerText = "Please select a file.";
  }
});
