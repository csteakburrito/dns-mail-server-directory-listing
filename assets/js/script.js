var responsiveHelper,
    breakpointDefinition = {
        tablet: 1024,
        phone : 480
    },
    tableContainer,
    table;

function getData(oSettings) {
 
    var aColumnsInc = getVisibleColumns(oSettings);
    var aRow, aData = [], sLoopData = '';
    //
    //Header
    //
    aRow = [];
    for (i = 0, iLen = oSettings.aoColumns.length; i < iLen; i++) {
        if (aColumnsInc[i]) {
            sLoopData = oSettings.aoColumns[i].sTitle.replace(/\n/g, " ").replace(/<.*?>/g, "").replace(/^\s+|\s+$/g, "");
            aRow.push(sLoopData);
        }
    }
    aData.push({ type: 'thead', cells: aRow });
    //
    //Body
    //
    for (j = 0, jLen = oSettings.aoData.length; j < jLen; j++) {
 
        aRow = [];
 
        for (i = 0, iLen = oSettings.aoColumns.length; i < iLen; i++) {
            if (aColumnsInc[i]) {
                if (oSettings.aoColumns[i].mData !== null) {
                    sLoopData = oSettings.aoData[j]._aData[oSettings.aoColumns[i].mData];
                    aRow.push(sLoopData);
                } else {
                    aRow.push('');
                }
            }
        }
        aData.push({ type: 'tbody', cells: aRow });
    }
    //
    //Footer
    //
    var vLen = getVisibleColumnsCount(oSettings);
    for (j = 0, jLen = oSettings.nTFoot.children.length; j < jLen; j++) {
        aRow = [];
        for (i = 0; i < vLen; i++) {
            sLoopData = oSettings.nTFoot.children[j].children[i].innerHTML.replace(/\n/g, " ").replace(/<.*?>/g, "").replace(/^\s+|\s+$/g, "");
            aRow.push(sLoopData);
        }
        aData.push({ type: 'tfoot', cells: aRow });
    }
    return aData;
}
 
 
function getVisibleColumns(oSettings) {
 
    var aColumns = [];
    for (i = 0, iLen = oSettings.aoColumns.length; i < iLen; i++) {
        aColumns.push(oSettings.aoColumns[i].bVisible && oSettings.aoColumns[i].sClass.indexOf('last') === -1 ? true : false);
    }
    return aColumns;
}
 
function getVisibleColumnsCount(oSettings) {
    var vColumns = 0;
    for (i = 0, iLen = oSettings.aoColumns.length; i < iLen; i++) {
        if (oSettings.aoColumns[i].bVisible && oSettings.aoColumns[i].sClass.indexOf('last') === -1) {
            vColumns++;
        }
    }
    return vColumns;
}

jQuery(document).ready(function($) {
    table = $("#table-3").dataTable({
        "sPaginationType": "bootstrap",
        "sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
        "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "bStateSave": true,
        "oTableTools": {
            "aButtons": [
                {
                    "sExtends": "copy",
                    "mColumns": [0, 1, 3, 4]
                },
                {
                    "sExtends": "csv",
                    "mColumns": [0, 1, 3, 4]
                },
                {
                    "sExtends": "pdf",
                    "mColumns": [0, 1, 3, 4]
                },
                {
                    "sExtends": "print",
                    "mColumns": [0, 1, 3, 4]
                },
            ]
        }
    });
    
    table.columnFilter({
        "sPlaceHolder" : "head:after"
    });
    tableContainer = $("#table-1");
    
    tableContainer.dataTable({
        "sPaginationType": "bootstrap",
        "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "bStateSave": true,

        // Responsive Settings
        bAutoWidth     : false,
        fnPreDrawCallback: function () {
            // Initialize the responsive datatables helper once.
            if (!responsiveHelper) {
                responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
            }
        },
        fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            responsiveHelper.createExpandIcon(nRow);
        },
        fnDrawCallback : function (oSettings) {
            responsiveHelper.respond();
        }
    });
    
    $(".dataTables_wrapper select").select2({
        minimumResultsForSearch: -1
    });

    // Export functionality
    $(".export-data .btn-group").prepend("<a href='#' id='export_xml' class='btn btn-white'>XML</a>");
    $('#export_xml').click(function() {
        var myData = JSON.stringify({ rows: getData(table.fnSettings()) });
        $.fileDownload('../exportoxml.php', {
            httpMethod: "POST",
            data: { data: myData },
            successCallback: function(url) {
                alert('Ok, generating XML file.');
            },
            failCallback: function(responseHtml, url) {
                alert('Error while generating XML file.');
            }
        });

        return false;
    });
});