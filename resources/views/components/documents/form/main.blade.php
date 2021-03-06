<div class="card">
    <div class="card-body">
        <x-documents.form.metadata
            type="{{ $type }}"
            :document="$document"
            hide-contact="{{ $hideContact }}"
            contact-type="{{ $contactType }}"
            :contact="$contact"
            :contacts="$contacts"
            :search_route="$contactSearchRoute"
            :create_route="$contactCreateRoute"
            hide-issue-at="{{ $hideIssuedAt }}"
            text-issue-at="{{ $textIssuedAt }}"
            issue-at="{{ $issuedAt }}"
            hide-document-number="{{ $hideDocumentNumber }}"
            text-document-number="{{ $textDocumentNumber }}"
            document-number="{{ $documentNumber }}"
            hide-due-at="{{ $hideDueAt }}"
            text-due-at="{{ $textDueAt }}"
            due-at="{{ $dueAt }}"
            hide-order-number="{{ $hideOrderNumber }}"
            text-order-number="{{ $textOrderNumber }}"
            order-number="{{ $orderNumber }}"
        />

        <x-documents.form.items 
            type="{{ $type }}"
            :document="$document"
            hide-edit-item-columns="{{ $hideEditItemColumns }}"
            hide-items="{{ $hideItems }}"
            hide-name="{{ $hideName }}"
            hide-description="{{ $hideDescription }}"
            text-items="{{ $textItems }}"
            hide-quantity="{{ $hideQuantity }}"
            text-quantity="{{ $textQuantity }}"
            hide-price="{{ $hidePrice }}"
            text-price="{{ $textPrice }}"
            hide-discount="{{ $hideDiscount }}"
            hide-amount="{{ $hideAmount }}"
            text-amount="{{ $textAmount }}"
        />

        <x-documents.form.totals
            type="{{ $type }}"
            :document="$document"
        />

        <x-documents.form.note
            type="{{ $type }}"
            :document="$document"
        />
    </div>
</div>
