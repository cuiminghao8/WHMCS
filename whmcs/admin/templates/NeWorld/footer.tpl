
        </div>
        <div class="clear"></div>

    </div>

    <div class="clear"></div>

    <div id="footer">
        <div class="pull-left">
            <a href="#">
                <i class="fa fa-angle-double-up"></i>
                Top
            </a>
        </div>
        <div class="whmcs-link">
            Copyright &copy; <a href="http://www.whmcs.com/" target="_blank">WHMCompleteSolution</a>.  All Rights Reserved. Designed by <a href="https://neworld.org" target="_blank">NeWorld Team</a>
        </div>
    </div>

    <div class="intellisearch">
        <form id="frmintellisearch">
            <input type="hidden" name="intellisearch" value="1" />
            <input type="hidden" name="token" value="{$csrfToken}" />
            <input type="text" name="value" id="intellisearchval" />
            <input type="submit" style="display:none;">
        </form>
    </div>

    <div id="searchresults">
        <div id="searchresultsscroller"></div>
        <div class="close">
            <a href="#" onclick="searchclose();return false">
                {$_ADMINLANG.clientsummary.close}
                <img src="images/delete.gif" width="16" height="16" border="0" align="top" />
            </a>
        </div>
    </div>

    <div id="greyout"></div>

<form id="frmmynotes">
    <input type="hidden" name="action" value="savenotes" />
    <input type="hidden" name="token" value="{$csrfToken}" />
    <div class="modal fade modal-my-notes" id="myNotes">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-warning">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">{$_ADMINLANG.global.mynotes}</h4>
                </div>
                <div class="modal-body">
                    <textarea id="mynotesbox" name="notes" rows="12" class="form-control">{$admin_notes}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$_ADMINLANG.global.cancel}</button>
                    <button type="button" class="btn btn-primary" onclick="notesclose('1')">{$_ADMINLANG.global.savechanges}</button>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="modal whmcs-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button id="modalAjaxClose" type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript" src="{$BASE_PATH_JS}/lightbox.min.js"></script>

    {$footeroutput}

</body>
</html>
