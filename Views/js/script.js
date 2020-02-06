const modal = document.querySelector('#modal-create-new-record');
const btnCreateNewRecord = document.querySelector('#create-new-record');
const btnCloseModal = document.querySelector('#close-modal-create-new-record');
const btnSaveNewRecord = document.querySelector('#btn-save-new-record');




const APIURL = 'http://localhost:80'
//import * as apiCalls from './api';
//  async loadTodos(){
//     let todos = await apiCalls.getTodos();
//     this.setState({todos});
//  }


const createAnItem = async (newItem={}) => {
  //const token = localStorage.token
  return fetch(APIURL+'/products/create', {
        method: 'post',
        //withCredentials: true,
        //credentials: 'include',
        headers: new Headers({
        'Content-Type': 'application/json',
        //'Authorization': 'Bearer ' + token
        }),
        body: JSON.stringify(newItem)
    })
    .then(resp => {
      if(!resp.ok) {
        if(resp.status >=400 && resp.status < 500) {
          resp.json().then(data => {
            return {errorMessage: data.message};
            // throw err;
          })
        } else {
          return {errorMessage: 'Please try again later, server is not responding'};
          // throw err;
        }
      }
      return resp.json();
    })
}

btnCreateNewRecord.addEventListener('click', ()=>{
    modal.style.display = 'block';
});

btnCloseModal.addEventListener('click', ()=>{
    modal.style.display = 'none';
});

btnSaveNewRecord.addEventListener('click', async ()=>{
    req = {
        id: document.getElementById('entry-id').value,
        type: document.getElementById('entry-type').value,
        name: document.getElementById('entry-name').value,
        qty: document.getElementById('entry-qty').value,
    }
    await createAnItem(req).then(res => {
        console.log(res);
    })    
})

