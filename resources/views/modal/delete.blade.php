{{-- MODAL CONFIRM DELETE DATA--}}
<div class="modal fade" id="modal-confirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 400px">

        <div class="modal-content p-4">
            <form action="/delete-task" method="post" id="deleteTask">
                @csrf
                {{ method_field('DEETE') }}
                
                <div class="modal-body mb-4 text-center" style="padding: 0">
                    <ion-icon name="alert-circle-outline" style="font-size: 200px; color: #05595b"></ion-icon>
                    <p style="margin: 0; font-weight: bolder" id="modal_content"></p>
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="task_id" id="task_id" >
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal" style="background-color: #ddd280; color: #05595b; font-weight: bolder; border: none">Batal</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #05595b; font-weight: bolder; border: none">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>