<div class="admiImpuestos view">
<h2><?php echo __('Admi Impuesto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($admiImpuesto['AdmiImpuesto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Impuesto'); ?></dt>
		<dd>
			<?php echo h($admiImpuesto['AdmiImpuesto']['impuesto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($admiImpuesto['AdmiImpuesto']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sist Estatuse'); ?></dt>
		<dd>
			<?php echo $this->Html->link($admiImpuesto['SistEstatuse']['id'], array('controller' => 'sist_estatuses', 'action' => 'view', $admiImpuesto['SistEstatuse']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($admiImpuesto['User']['id'], array('controller' => 'users', 'action' => 'view', $admiImpuesto['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($admiImpuesto['AdmiImpuesto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($admiImpuesto['AdmiImpuesto']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Admi Impuesto'), array('action' => 'edit', $admiImpuesto['AdmiImpuesto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Admi Impuesto'), array('action' => 'delete', $admiImpuesto['AdmiImpuesto']['id']), array(), __('Are you sure you want to delete # %s?', $admiImpuesto['AdmiImpuesto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Admi Impuestos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admi Impuesto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sist Estatuses'), array('controller' => 'sist_estatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sist Estatuse'), array('controller' => 'sist_estatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admi Facturaciones'), array('controller' => 'admi_facturaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admi Facturacione'), array('controller' => 'admi_facturaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Admi Facturas'), array('controller' => 'admi_facturas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Admi Factura'), array('controller' => 'admi_facturas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cove Presupuestos'), array('controller' => 'cove_presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cove Presupuesto'), array('controller' => 'cove_presupuestos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cove Ventas'), array('controller' => 'cove_ventas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cove Venta'), array('controller' => 'cove_ventas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Admi Facturaciones'); ?></h3>
	<?php if (!empty($admiImpuesto['AdmiFacturacione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Numero Factura'); ?></th>
		<th><?php echo __('Cove Venta Id'); ?></th>
		<th><?php echo __('Admi Cliente Id'); ?></th>
		<th><?php echo __('Sub Monto Total'); ?></th>
		<th><?php echo __('Admi Impuesto Id'); ?></th>
		<th><?php echo __('Valor Impuesto'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th><?php echo __('Sist Estatuse Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($admiImpuesto['AdmiFacturacione'] as $admiFacturacione): ?>
		<tr>
			<td><?php echo $admiFacturacione['id']; ?></td>
			<td><?php echo $admiFacturacione['fecha']; ?></td>
			<td><?php echo $admiFacturacione['numero_factura']; ?></td>
			<td><?php echo $admiFacturacione['cove_venta_id']; ?></td>
			<td><?php echo $admiFacturacione['admi_cliente_id']; ?></td>
			<td><?php echo $admiFacturacione['sub_monto_total']; ?></td>
			<td><?php echo $admiFacturacione['admi_impuesto_id']; ?></td>
			<td><?php echo $admiFacturacione['valor_impuesto']; ?></td>
			<td><?php echo $admiFacturacione['monto_total']; ?></td>
			<td><?php echo $admiFacturacione['sist_estatuse_id']; ?></td>
			<td><?php echo $admiFacturacione['user_id']; ?></td>
			<td><?php echo $admiFacturacione['created']; ?></td>
			<td><?php echo $admiFacturacione['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'admi_facturaciones', 'action' => 'view', $admiFacturacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'admi_facturaciones', 'action' => 'edit', $admiFacturacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'admi_facturaciones', 'action' => 'delete', $admiFacturacione['id']), array(), __('Are you sure you want to delete # %s?', $admiFacturacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Admi Facturacione'), array('controller' => 'admi_facturaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Admi Facturas'); ?></h3>
	<?php if (!empty($admiImpuesto['AdmiFactura'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Numero Factura'); ?></th>
		<th><?php echo __('Admi Cliente Id'); ?></th>
		<th><?php echo __('Sub Monto Total'); ?></th>
		<th><?php echo __('Admi Impuesto Id'); ?></th>
		<th><?php echo __('Valor Impuesto'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th><?php echo __('Sist Estatuse Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($admiImpuesto['AdmiFactura'] as $admiFactura): ?>
		<tr>
			<td><?php echo $admiFactura['id']; ?></td>
			<td><?php echo $admiFactura['fecha']; ?></td>
			<td><?php echo $admiFactura['numero_factura']; ?></td>
			<td><?php echo $admiFactura['admi_cliente_id']; ?></td>
			<td><?php echo $admiFactura['sub_monto_total']; ?></td>
			<td><?php echo $admiFactura['admi_impuesto_id']; ?></td>
			<td><?php echo $admiFactura['valor_impuesto']; ?></td>
			<td><?php echo $admiFactura['monto_total']; ?></td>
			<td><?php echo $admiFactura['sist_estatuse_id']; ?></td>
			<td><?php echo $admiFactura['user_id']; ?></td>
			<td><?php echo $admiFactura['created']; ?></td>
			<td><?php echo $admiFactura['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'admi_facturas', 'action' => 'view', $admiFactura['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'admi_facturas', 'action' => 'edit', $admiFactura['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'admi_facturas', 'action' => 'delete', $admiFactura['id']), array(), __('Are you sure you want to delete # %s?', $admiFactura['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Admi Factura'), array('controller' => 'admi_facturas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cove Presupuestos'); ?></h3>
	<?php if (!empty($admiImpuesto['CovePresupuesto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Admi Cliente Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Sub Monto Total'); ?></th>
		<th><?php echo __('Admi Impuesto Id'); ?></th>
		<th><?php echo __('Valor Impuesto'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th><?php echo __('Sist Estatuse Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($admiImpuesto['CovePresupuesto'] as $covePresupuesto): ?>
		<tr>
			<td><?php echo $covePresupuesto['id']; ?></td>
			<td><?php echo $covePresupuesto['admi_cliente_id']; ?></td>
			<td><?php echo $covePresupuesto['codigo']; ?></td>
			<td><?php echo $covePresupuesto['fecha']; ?></td>
			<td><?php echo $covePresupuesto['sub_monto_total']; ?></td>
			<td><?php echo $covePresupuesto['admi_impuesto_id']; ?></td>
			<td><?php echo $covePresupuesto['valor_impuesto']; ?></td>
			<td><?php echo $covePresupuesto['monto_total']; ?></td>
			<td><?php echo $covePresupuesto['sist_estatuse_id']; ?></td>
			<td><?php echo $covePresupuesto['user_id']; ?></td>
			<td><?php echo $covePresupuesto['created']; ?></td>
			<td><?php echo $covePresupuesto['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cove_presupuestos', 'action' => 'view', $covePresupuesto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cove_presupuestos', 'action' => 'edit', $covePresupuesto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cove_presupuestos', 'action' => 'delete', $covePresupuesto['id']), array(), __('Are you sure you want to delete # %s?', $covePresupuesto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cove Presupuesto'), array('controller' => 'cove_presupuestos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cove Ventas'); ?></h3>
	<?php if (!empty($admiImpuesto['CoveVenta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Admi Cliente Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Sub Monto Total'); ?></th>
		<th><?php echo __('Admi Impuesto Id'); ?></th>
		<th><?php echo __('Valor Impuesto'); ?></th>
		<th><?php echo __('Monto Total'); ?></th>
		<th><?php echo __('Sist Estatuse Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($admiImpuesto['CoveVenta'] as $coveVenta): ?>
		<tr>
			<td><?php echo $coveVenta['id']; ?></td>
			<td><?php echo $coveVenta['admi_cliente_id']; ?></td>
			<td><?php echo $coveVenta['codigo']; ?></td>
			<td><?php echo $coveVenta['fecha']; ?></td>
			<td><?php echo $coveVenta['sub_monto_total']; ?></td>
			<td><?php echo $coveVenta['admi_impuesto_id']; ?></td>
			<td><?php echo $coveVenta['valor_impuesto']; ?></td>
			<td><?php echo $coveVenta['monto_total']; ?></td>
			<td><?php echo $coveVenta['sist_estatuse_id']; ?></td>
			<td><?php echo $coveVenta['user_id']; ?></td>
			<td><?php echo $coveVenta['created']; ?></td>
			<td><?php echo $coveVenta['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cove_ventas', 'action' => 'view', $coveVenta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cove_ventas', 'action' => 'edit', $coveVenta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cove_ventas', 'action' => 'delete', $coveVenta['id']), array(), __('Are you sure you want to delete # %s?', $coveVenta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cove Venta'), array('controller' => 'cove_ventas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
