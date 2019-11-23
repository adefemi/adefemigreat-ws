<form id="submitContact" method="POST" style="width: 100%">
    <div class="form-group">
        <label>
            <span class="label">NAME</span>
            <input type="text" id="a-name" autocomplete="off" required/>
        </label>
    </div>
    <div class="form-group">
        <label>
            <span class="label">EMAIL</span>
            <input name="email" id="a-email" autocomplete="off" required/>
        </label>
    </div>
    <div class="form-group">
        <label>
            <span class="label">MESSAGE</span>
            <textarea rows="5" id="a-message"  autocomplete="off" required></textarea>
        </label>
    </div>
    <br>
    <button type="submit" class="button-main" id="ContactButton">Send Message</button>
</form>