window.onload = () => {
  getPosts();
  addPost();

}


async function getPosts() {
  const res = await fetch(window.location.href + 'api/posts');
  const posts = await res.json();

  posts.forEach(post => {
      document.querySelector('.post-list').innerHTML += `
        <div class="card">
            <h5>${post.title}</h5>
            <p>${post.body}</p>
            <a href="">Read More</a>
        </div>
      `
  })
}

function addPost() {
  const title = document.getElementById("title")
  const body = document.getElementById('body')

  document.getElementById('addPost').addEventListener('click', (e) =>  {

  })

}


