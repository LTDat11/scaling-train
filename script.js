const nameInput = document.querySelector("#username");
const emailInput = document.querySelector("#email");
const myform = document.querySelector("#myform");
const errorMsg = document.querySelector(".error-msg");
const btndelete = document.querySelectorAll(".action_delete")

myform.addEventListener("submit", (e) => {
    const nameValue = nameInput.value.trim();
    const emailValue = emailInput.value.trim();

    // Reset thông báo lỗi mỗi lần nhấn submit
    errorMsg.innerText = "";

    // Validate Tên
    if (nameValue === "") {
        errorMsg.innerText = "Check name!";
        nameInput.focus(); // Đưa con trỏ chuột vào ô tên cho tiện
        e.preventDefault(); // CHẶN gửi form
        return;
    }

    // Validate Email (vọc thêm chút nữa)
    if (emailValue === "") {
        errorMsg.innerText = "Check email!";
        emailInput.focus();
        e.preventDefault();
        return;
    }

    // Nếu mọi thứ ok, form sẽ tự gửi đi đến /create.php
    console.log("Dữ liệu hợp lệ, đang gửi...");
});

btndelete.forEach((button) => {
    button.addEventListener("click", (e) => {
        // Cách lấy ID từ URL cực nhanh
        const urlParams = new URLSearchParams(button.href.split('?')[1]);
        const id = urlParams.get('id');

        if (!confirm(`Are you sure you want to delete User with ID: ${id}?`)) {
            e.preventDefault();
        }
    });
});