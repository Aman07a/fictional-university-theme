import $ from "jquery";

class MyNotes {
  constructor() {
    this.events();
  }

  events() {
    $(".delete-note").on("click", this.deleteNode);
  }

  // Methods will go here
  deleteNode() {
    alert("you clicked delete");
  }
}

export default MyNotes;
