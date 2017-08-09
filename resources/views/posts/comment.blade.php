<div class="contact-form pad-top-big pad-bottom-big">
    <h3>Leave A Comment</h3>
    <div id="app">
        <form method="post" action="/posts/{{ $post->id }}/comment">
            {{ csrf_field() }}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <div class="form-group">
                    <textarea v-model="message"
                              name="body"
                              placeholder="Comment"
                              required>
                        {{ old('body') }}
                    </textarea>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <div v-show="message" class="form-group contactus-btn">
                    <button type="submit"
                            class="cntct-btn">
                        Post Comment
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">

    </div>
</div>

<script>
    let app = new Vue({
        el: '#app',
        data: {
            message: ''
        }
    });
</script>