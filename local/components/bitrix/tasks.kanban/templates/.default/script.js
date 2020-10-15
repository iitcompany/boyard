BX.namespace("Tasks.KanbanComponent");

let enabledSort = BX.getCookie('enabledSort');

	BX.addCustomEvent('Kanban.Grid:onRender', function (grid) {
		if (typeof enabledSort !== 'undefined' && enabledSort === 'enabled') {
			addResponsibleSort(grid);
		}


		if (typeof grid.task_sort === 'undefined')
		{
			BX.addCustomEvent('onTaskSortChanged', function () {
				grid.onApplyFilter();
				grid.task_sort = true;
			});
		}

	});
	BX.addCustomEvent('Kanban.Column:render', function (column) {
		if (typeof enabledSort !== 'undefined' && enabledSort === 'enabled') {
			addResponsibleSort(column.grid);
		}

	});



$(document).ready(function () {
	let enabledSort = BX.getCookie('enabledSort'),
		btn = $('#tasks-popupMenuOptions');


	if (typeof enabledSort !== 'undefined' && enabledSort === 'enabled')
	{
		btn.before('<button data-value="disabled" class="js-init-set-sort ui-btn ui-btn-default">Отключить сортировку</button>');

		$('.main-kanban-column-body').scroll(function () {
			let $this = $(this);

			$('.main-kanban-column-body').each(function () {
				$(this).scrollTop($this.scrollTop());
			});
		});
	} else {
		btn.before('<button data-value="enabled" class="js-init-set-sort ui-btn ui-btn-primary">Включить сортировку</button>');
	}

	$('.js-init-set-sort').on('click', function() {
		let val = $(this).attr('data-value');

		BX.setCookie('enabledSort', val, {expires: 86400, path: '/'});
		window.location.reload();
	});

});


function addResponsibleSort(grid)
{
	let kanbanColumns = $('.main-kanban-column-items'),
		responsibleGroupClass = 'main-kanban-column-items__group',
		responsibleGroupTitleClass = 'main-kanban-column-items__group-title',
		columnIndex = 0,
		users = {};

	$.each(grid.items, function (itemId, item) {
		if (typeof item.data.responsible !== 'undefined' && typeof item.data.responsible.id !== 'undefined') {
			let itemEl = $('[data-id="' + itemId + '"]'),
				userId = item.data.responsible.id;

				users[userId] = item.data.responsible.name;
				itemEl.attr('data-user-id', userId);
		}
	});

	kanbanColumns.each(function () {
		let column = $(this),
			columnId = column.parent().attr('data-id'),
			isFirstColumn = grid.columnsOrder[0].id === columnId;

		$.each(users, function (userId, userName) {
			let group = column.find('[data-group="' + userId + '"]');
			if (group.length === 0)
			{
				column.append('<div class="' + responsibleGroupClass + '" data-group="' + userId + '"></div>');

				if (isFirstColumn === false) {
					userName = '';
				}
				column.find('[data-group="' + userId + '"]').prepend('<div class="' + responsibleGroupTitleClass + '">' + userName + '</div>');

			}

		});
		column.find('.main-kanban-item').each(function () {
			let item = $(this),
				groupUserId = $(this).attr('data-user-id');

			item.appendTo(column.find('[data-group="' + groupUserId + '"]'));
		});
		columnIndex++;
	});

	kanbanColumns.each(function () {
		let column = $(this);

		column.find('.main-kanban-column-items__group').each(function () {
			let group = $(this),
				groupHeight = group.outerHeight(),
				groupIndex = group.attr('data-group');

			kanbanColumns.each(function () {
				let groupEx = $(this).find('[data-group="' + groupIndex + '"]'),
					groupExHeight = groupEx.outerHeight();

				if (typeof groupEx !== 'undefined' && groupEx.length > 0) {
					if (groupHeight > groupExHeight) {
						groupEx.css('height', groupHeight);
					} else {
						group.css('height', groupExHeight);
					}
				}
			});
		});
	});
}

	BX.Tasks.KanbanComponent.ClickSort = function (event, item) {
		console.log(item);
		var order = "desc";

		if (
			typeof item.params !== "undefined" &&
			typeof item.params.order !== "undefined"
		) {
			order = item.params.order;
		}

		// refresh icons and save selected
		if (!BX.hasClass(BX(item.layout.item), "menu-popup-item-accept")) {
			var menuItems = item.menuWindow.menuItems;
			for (var i = 0, c = menuItems.length; i < c; i++) {
				BX.removeClass(BX(menuItems[i].layout.item), "menu-popup-item-accept");
			}
			BX.addClass(BX(item.layout.item), "menu-popup-item-accept");

			BX.ajax({
				method: "POST",
				dataType: "json",
				url: ajaxHandlerPath,
				data: {
					action: "setNewTaskOrder",
					order: order,
					sessid: BX.bitrix_sessid(),
					params: ajaxParams
				},
				onsuccess: function (data) {
					BX.onCustomEvent(this, "onTaskSortChanged", [data]);

				}
			});
		}
	};

	BX.Tasks.KanbanComponent.filterId = {};
	BX.Tasks.KanbanComponent.defaultPresetId = {};

	BX.Tasks.KanbanComponent.onReady = function () {
		// sort-button is disabled
		BX.bind(BX("tasks-popupMenuOptions"), "click", BX.delegate(function () {
			if (BX.data(BX("tasks-popupMenuOptions"), "disabled") === true) {
				var tooltip = new BX.PopupWindow(
					"popupMenuOptionsDisabled",
					BX("tasks-popupMenuOptions"),
					{
						closeByEsc: true,
						angle: true,
						offsetLeft: 5,
						darkMode: true,
						autoHide: true,
						zIndex: 1000,
						content: BX.message("TASKS_KANBAN_DIABLE_SORT_TOOLTIP")
					}
				);
				tooltip.show();

			}
		}));

		BX.addCustomEvent('Tasks.TopMenu:onItem', function (roleId, url) {
			var filterManager = BX.Main.filterManager.getById(BX.Tasks.KanbanComponent.filterId);
			if (!filterManager) {
				alert('BX.Main.filterManager not initialised');
				return;
			}

			var fields = {
				preset_id: BX.Tasks.KanbanComponent.defaultPresetId,
				additional: {ROLEID: (roleId === 'view_all' ? 0 : roleId)}
			};
			var filterApi = filterManager.getApi();
			filterApi.setFilter(fields);

			window.history.pushState(null, null, url);
		});

		BX.addCustomEvent('Tasks.Toolbar:onItem', function (counterId) {
			var filterManager = BX.Main.filterManager.getById(BX.Tasks.KanbanComponent.filterId);
			if (!filterManager) {
				alert('BX.Main.filterManager not initialised');
				return;
			}
			var filterApi = filterManager.getApi();
			var filterFields = filterManager.getFilterFieldsValues();

			if (Number(counterId) === 12582912 || Number(counterId) === 6291456) {
				var fields = {
					ROLEID: (filterFields.hasOwnProperty('ROLEID') ? filterFields.ROLEID : 0),
					PROBLEM: counterId
				};
				filterApi.setFields(fields);
				filterApi.apply();
			} else {
				fields = {
					preset_id: BX.Tasks.KanbanComponent.defaultPresetId,
					additional: {
						PROBLEM: counterId,
					}
				};
				if (filterFields.hasOwnProperty('ROLEID')) {
					fields.additional.ROLEID = filterFields.ROLEID;
				}
				filterApi.setFilter(fields);
			}
		});
	};


BX.addCustomEvent("SidePanel.Slider:onCloseByEsc", function(event) {
	var reg = /tasks\/task\/edit/;
	var str = event.getSlider().getUrl();
	if (reg.test(str) && !confirm(BX.message('TASKS_CLOSE_PAGE_CONFIRM')))
	{
		event.denyAction();
	}
});